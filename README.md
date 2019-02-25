# HelpmateCSS

This is an "Static Atomic CSS Library" to avoid massive code repeating (by re-adding the same properties always, for example). This is a collection of CSS common properties turned into Utility Classes.

This library dont have a grid system. Helpmate provides a collection of helpers to apply current and simply styles avoiding repeat same code every single class to do simple things as deal with display responsive rules, for example. You can use this library to turn your html components more descriptive when working in a team.

# Getting Started

Add the library to your head and apply the classes in according to your needings

```html
<link rel="stylesheet" type="text/css" href="whatever/dist/helpmate.min.css">
```

# Documentation

Online Documentation At:
http://helpmatecssdoc/asdf

# Coverage

The library covers the following properties and aspects:

- background
- centering
- cursor
- hiding
- list
- margin
- overflow
- padding
- resize
- text
- visibility
- width-height (full/none)

# Examples

Commonly the prefixes are constructed from common abreviations. If the property has two words, so the
helpmate prefix will be the first letter of each word (fw for font-weight for ex). So, the library follows
a simple pattern. You must check the documentation to see the complete list of features. Here we'll show
a simple overview of the usage:

#### Properties and Values

prefix:value

So, you must add the prefix of the propertie you want to change (bg for background, for example), followed
by the :value that you want to apply - bg:cover or bg:auto to change background behavior for example.

#### Sizes

prefix:size

The properties that depends from sizes will accept the following values:
"xs, md, lg, xl", corresponding to extra small, medium, large and extra large.

If you want to add the default size, just add the prefix without value.
To apply different paddings, for example:

pad:xs // apply an extra small padding
pad    // apply a default pad
pad:lg // apply a large padding

#### Direction

prefix-direction:value

The direction can be left, right, top or bottom, and are represented by their first letter.

l: left
r: right
t: top
b: bottom

To apply the padding, for example:

pad-l:xs   // apply an extra small padding on left
pad-r:lg   // and a large padding on right,
pad-b:none // to remove padding on bottom

You can use VE and HZ to apply vertical and horizontal styles. For example:

pad-ve:xs // apply an extra small padding on top and bottom
pad-hz:lg // apply a large padding on left and right

#### Code Example

```html
<div class="pad">
	<p class="ta:right tt:capitalize tw:700">This is a HelpmateCSS Example</p>
</div>
```

# Docs from Scratch

To see documentation from the sources or recompile it, you must install Hexo first.

```bash
npm install hexo -g
```

To serve the docs, go to helpmateCSS/doc/ and run

```bash
hexo serve
```

To recompile the docs, go to the helpmateCSS/doc/ and run:

```bash
hexo generate && hexo serve
```

To know more about Hexo, please follow https://hexo.io/

# The Flux

HelpmateCSS is constructed using scss. The sources are on the /src folder. You must use Gulp to compile/minify them.
This is specially useful if you want to extend or change something (as add a prefix, or change unit sizes, for example).
To recompile, open a terminal on the HelpmateCSS root folder, and follow this steps:


```bash
npm install && gulp
```

The files inside the /dist folder will be created. The css will be auto-prefixed, and will have a minified ang gziped version.
Change the sources as you want, and if you have a nice sugestion, please leave a comment.