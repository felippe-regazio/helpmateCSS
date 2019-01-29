# HelpmateCSS

This is in development, please dont use yet.

# Note

This is an "Static Atomic CSS Library" to avoid massive code repeating (by re-adding the same properties always, for example). This is a collection of CSS common properties turned into Utility Classes.

# Flux

Writing Style Sheets on SoC - A Proposal
Separation of concerns (SoC) applied to style sheets writing process.

-- SoC Layers: Every Component/Block Stylesheet will have:

1. Layout and position (prefer use grid)
2. Global (common/native) style (use atomic style)
3. Theme and self properties

Scss/Css Folder/File Tree

1. Layouts.s/css
2. Helpmate.css
3. Themes.s/css

# Documentation

Documentation at: http://embreve.github.com


To contribute with the documentation: this doc is builded with hexo. If you never heard about Hexo, you may want to see its documentation before start: https://hexo.io/. To edit the doc, go to your helpmateCss dir on a terminal, then go to ./doc dir and run:

```bash
npm install hexo -g && npm install
```

# Research

Challenging CSS Best Practices
https://www.smashingmagazine.com/2013/10/challenging-css-best-practices-atomic-approach/

Separation of Concerns
https://en.wikipedia.org/wiki/Separation_of_concerns

ATOMIC CSS AS A TOOL SET
https://www.lucidchart.com/techblog/2014/01/31/atomic-css-tool-set/