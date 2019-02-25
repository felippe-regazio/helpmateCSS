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

The library cover the following properties/aspects:

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

The library follow a simple pattern:

# Properties and Values

prefix:value

So, you must add the prefix of the propertie you want to change (bg for background, for example), followed
by the :value that you want to apply - bg:cover or bg:auto to change background behavior for example.

# Sizes

The


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