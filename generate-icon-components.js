import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';
import * as lucide from 'lucide';

// Get the directory name in ES modules
const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

// Directories where icon components will be stored
const VIEWS_DIR = path.resolve(__dirname, 'resources/views/components/icons');
const COMPONENTS_DIR = path.resolve(__dirname, 'src/View/Components/Icons');
const SVG_DIR = path.resolve(__dirname, 'resources/svg');

// Function to remove all files in a directory
function cleanDirectory(directory) {
	if (fs.existsSync(directory)) {
		const files = fs.readdirSync(directory);
		for (const file of files) {
			const filePath = path.join(directory, file);
			fs.unlinkSync(filePath);
		}
		console.log(`Cleaned directory: ${directory}`);
	}
}

// Clean existing icon files
cleanDirectory(VIEWS_DIR);
cleanDirectory(COMPONENTS_DIR);
cleanDirectory(SVG_DIR);

// Ensure the directories exist
if (!fs.existsSync(VIEWS_DIR)) {
	fs.mkdirSync(VIEWS_DIR, { recursive: true });
}

if (!fs.existsSync(COMPONENTS_DIR)) {
	fs.mkdirSync(COMPONENTS_DIR, { recursive: true });
}

if (!fs.existsSync(SVG_DIR)) {
	fs.mkdirSync(SVG_DIR, { recursive: true });
}

// Convert Lucide icon data to SVG string
function createSvgElement(iconName, iconData) {
	// Start with the SVG opening tag with default attributes
	let svg = `<svg
    {{ $attributes->merge([
        'class' => 'lucide lucide-' . strtolower('${iconName}') . ' ' . $class,
        'width' => $size,
        'height' => $size,
        'viewBox' => '0 0 24 24',
        'fill' => 'none',
        'stroke' => $stroke,
        'stroke-width' => $strokeWidth,
        'stroke-linecap' => 'round',
        'stroke-linejoin' => 'round',
        'aria-hidden' => 'true'
    ]) }}
>`;

	// Add each element from the icon data
	iconData.forEach(([tag, attrs]) => {
		svg += `\n    <${tag}`;

		if (attrs) {
			Object.entries(attrs).forEach(([key, value]) => {
				svg += ` ${key}="${value}"`;
			});
		}

		svg += ` />`;
	});

	// Close the SVG tag
	svg += '\n</svg>';

	return svg;
}

// Create a plain SVG string without PHP variables for standalone SVG files
function createPlainSvgElement(iconData) {
	// Start with the SVG opening tag with default attributes
	let svg = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">`;

	// Add each element from the icon data
	iconData.forEach(([tag, attrs]) => {
		svg += `\n  <${tag}`;

		if (attrs) {
			Object.entries(attrs).forEach(([key, value]) => {
				svg += ` ${key}="${value}"`;
			});
		}

		svg += ` />`;
	});

	// Close the SVG tag
	svg += '\n</svg>';

	return svg;
}

// Create a PHP component class
function createComponentClass(iconName) {
	// Convert kebab-case to PascalCase for the class name
	const pascalName = iconName
		.split('-')
		.map(part => part.charAt(0).toUpperCase() + part.slice(1))
		.join('');

	return `<?php

namespace johnnynotsolucky\\Lucide\\View\\Components\\Icons;

use johnnynotsolucky\\Lucide\\View\\Components\\Icon;

class ${pascalName} extends Icon
{
    // Inherits functionality from the parent Icon class
}`;
}

// Generate a component for each icon
function generateIconComponents() {
	try {
		const { icons } = lucide;

		console.log(`Found ${Object.keys(icons).length} icons in the lucide package`);

		// Generate a component for each icon
		Object.keys(icons).forEach(iconName => {
			// Convert camelCase to kebab-case for the file name
			const kebabName = iconName.replace(/([a-z0-9])([A-Z])/g, '$1-$2').toLowerCase();
			const viewPath = path.join(VIEWS_DIR, `${kebabName}.blade.php`);
			const componentPath = path.join(COMPONENTS_DIR, `${kebabName.split('-').map(part => part.charAt(0).toUpperCase() + part.slice(1)).join('')}.php`);
			const svgPath = path.join(SVG_DIR, `${kebabName}.svg`);

			// Create the SVG content for PHP components
			const svgContent = createSvgElement(iconName, icons[iconName]);

			// Create the plain SVG content for standalone SVG files
			const plainSvgContent = createPlainSvgElement(icons[iconName]);

			// Create the view content with the embedded SVG
			const viewContent = `@props([
    'size' => 24,
    'stroke' => 'currentColor',
    'strokeWidth' => 2,
    'class' => '',
])

${svgContent}`;

			// Create the component class
			const componentContent = createComponentClass(kebabName);

			fs.writeFileSync(viewPath, viewContent);
			fs.writeFileSync(componentPath, componentContent);
			fs.writeFileSync(svgPath, plainSvgContent);
		});

		console.log(`Generated ${Object.keys(icons).length} icon components in ${VIEWS_DIR} and ${COMPONENTS_DIR}`);
		console.log(`Generated ${Object.keys(icons).length} SVG files in ${SVG_DIR}`);
	} catch (error) {
		console.error('Error generating icon components:', error);
	}
}

generateIconComponents();
