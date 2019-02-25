# HelpmateCSS

This is an "Static Atomic CSS Library" to avoid massive code repeating (by re-adding the same properties always, for example). This is a collection of CSS common properties turned into Utility Classes.

This library dont have a grid system. Helpmate provides a collection of helpers to apply current and simply styles avoiding repeat same code every single class to do simple things as deal with display responsive rules, for example. You can use this library to turn your html components more descriptive when working in a team.

# Getting Started

Add the library to your head and apply the classes in according to your needings

```html
<link rel="stylesheet" type="text/css" href="whatever/dist/helpmate.min.css">
```

# Documentation

Docs At:
http://helpmatecssdoc/asdf

To see documentation from the sources, just open the index.html inside the /doc folder.
To compile the documentation, go to the helpmateCSS root in a terminal, and run:

```bash
npm install hexo -g && cd doc && hexo generate && hexo server
```

Here we install hexo as global, then cd to the /doc folder, use hexo to generate doc files and serve them.
To know more about Hexo, please follow https://hexo.io/

# Flux

HelpmateCSS is constructed using scss. The sourcers are on the src file. You can use gulp to compile them if you need.
This is specially useful if you want to extend or change something (as add a prefix, or change base sizes, for example).
To recompile, open a terminal on the HelpmateCSS root folder, and follow this steps:


```bash
npm install && gulp
```

The files inside the /dist folder will be created. The css will be auto-prefixed, and will have a minified ang gziped version.
Change the sources as you want, and if you have a nice sugestion, please leave a comment.