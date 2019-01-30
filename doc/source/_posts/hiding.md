---
title: hiding
date: 2019-01-30 09:44:21
tags:
---


### Hidings

{% raw %}
<div class="content">
  <div class="block">
    <div class="cen-ve:flex">
      <div class="square big mar cen:flex"><div>reference</div></div>
      <div class="square big mar cen:flex"><div class="no">hidden</div></div>
    </div>    
  </div>
  <div class="text">
    <h4 id="hidden-by-breakpoint">Hidden by Breakpoint</h4>
    <p>You can hide an element by breakpoints using <span class="hey">no:</span><span class="fw:bold">breakpoint</span></p>
    <h4 id="breakpoints">Breakpoints:</h4>
    <ul>
      <li><span class="fw:bold" style="width: 100px; display: inline-block">mobile-sm</span> 320px</li><br/>
      <li><span class="fw:bold" style="width: 100px; display: inline-block">mobile-md</span> 375px</li><br/>
      <li><span class="fw:bold" style="width: 100px; display: inline-block">mobile</span> 425</li><br/>
      <li><span class="fw:bold" style="width: 100px; display: inline-block">tablet</span> 768px</li><br/>
      <li><span class="fw:bold" style="width: 100px; display: inline-block">laptop</span> 1024px</li><br/>
      <li><span class="fw:bold" style="width: 100px; display: inline-block">desktop</span> 1440px</li><br/>
      <li><span class="fw:bold" style="width: 100px; display: inline-block">desktop-lg</span> 2560px</li><br/>
    </ul>      
  </div>
  <div class="block">
    <h4 id="mobile-sm">no:mobile-sm</h4>
    <p>Hides element to all screens minor than 320px</p>
    <div class="square big cen:flex no:mobile-sm"><div class="hey">no:mobile-sm</div></div>
  </div>
  <div class="block">
    <h4 id="mobile-md">no:mobile-md</h4>
    <p>Hides element to all screens minor than 375px</p>
    <div class="square big cen:flex no:mobile-md"><div class="hey">no:mobile-md</div></div>
  </div>
  <div class="block">
    <h4 id="no-mobile">no:mobile</h4>
    <p>Hides element to all screens minor than 425px</p>
    <div class="square big cen:flex no:mobile"><div class="hey">no:mobile</div></div>
  </div>
  <div class="block">
    <h4 id="no-tablet">no:tablet</h4>
    <p>Hides element to all screens minor than 768px</p>
    <div class="square big cen:flex no:tablet"><div class="hey">no:tablet</div></div>
  </div>
  <div class="block">
    <h4 id="no-laptop">no:laptop</h4>
    <p>Hides element to all screens minor than 1024px</p>
    <div class="square big cen:flex no:laptop"><div class="hey">no:laptop</div></div>
  </div>
  <div class="block">
    <h4 id="no-desktop">no:desktop</h4>
    <p>Hides element to all screens minor than 1440px</p>
    <div class="square big cen:flex no:desktop"><div class="hey">no:desktop</div></div>
  </div>
  <div class="block">
    <h4 id="no-desktop-lg">no:desktop-lg</h4>
    <p>Hides element to all screens minor than 2560px</p>
    <div class="square big cen:flex no:desktop-lg"><div class="hey">no:desktop-lg</div></div>
  </div>
  <div class="text">
    <h4 id="device-only">Hidden for a Device Only</h4>
    <p>You can hide an element only to an specific device width. The element will be hidden from its breakpoint till the next minor breakpoint.</span></p>
    <h4 id="device-only-breakpoints">Breakpoints (Only Mode):</h4>
    <ul>
      <li><span class="fw:bold" style="width: 100px; display: inline-block">mobile-sm</span> Between <span class="fw:bold">N</span> and max <span class="fw:bold">320px</span></li><br/>
      <li><span class="fw:bold" style="width: 100px; display: inline-block">mobile-md</span> min <span class="fw:bold">320px | 375px </span>max</li><br/>
      <li><span class="fw:bold" style="width: 100px; display: inline-block">mobile</span> min <span class="fw:bold">375px | 425px </span>max</li><br/>
      <li><span class="fw:bold" style="width: 100px; display: inline-block">tablet</span> min <span class="fw:bold">425px | 768px </span>max</li><br/>
      <li><span class="fw:bold" style="width: 100px; display: inline-block">laptop</span> min <span class="fw:bold">768px | 1024px </span>max</li><br/>
      <li><span class="fw:bold" style="width: 100px; display: inline-block">desktop</span> min <span class="fw:bold">1024px | 1440px </span>max</li><br/>
      <li><span class="fw:bold" style="width: 100px; display: inline-block">desktop-lg</span> Between min <span class="fw:bold">1440px</span> and <span class="fw:bold"> N</span></li><br/>
    </ul>      
  </div>
  <div class="block">
    <h4 id="no-mobile-sm-only">no:mobile-sm-only</h4>
    <div class="square big cen:flex no:mobile-sm-only"><div class="hey">no:mobile-sm-only</div></div>
  </div>
  <div class="block">
    <h4 id="no-mobile-md-only">no:mobile-md-only</h4>
    <div class="square big cen:flex no:mobile-md-only"><div class="hey">no:mobile-md-only</div></div>
  </div>
  <div class="block">
    <h4 id="mo-mobile-only">no:mobile-only</h4>
    <div class="square big cen:flex no:mobile-only"><div class="hey">no:mobile-only</div></div>
  </div>
  <div class="block">
    <h4 id="no-tablet-only">no:tablet-only</h4>
    <div class="square big cen:flex no:tablet-only"><div class="hey">no:tablet-only</div></div>
  </div>
  <div class="block">
    <h4 id="no-laptop-only">no:laptop-only</h4>
    <div class="square big cen:flex no:laptop-only"><div class="hey">no:laptop-only</div></div>
  </div>
  <div class="block">
    <h4 id="no-desktop-only">no:desktop-only</h4>
    <div class="square big cen:flex no:desktop-only"><div class="hey">no:desktop-only</div></div>
  </div>
  <div class="block">
    <h4 id="no-desktop-lg-only">no:desktop-lg-only</h4>
    <div class="square big cen:flex no:desktop-lg-only"><div class="hey">no:desktop-lg-only</div></div>
  </div>    
</div>
{% endraw %}