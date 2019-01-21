width:max  = max-width:100%; / auto / none
height:same

classes to center
responsive hidden and show by breakpoints

.no-border

It removes the border from the element


.no-margin

It removes the margins from the element


.no-padding

It removes the padding from the element


.no-radius

It removes the border-radius from the element


.no-bg

It removes the background from the element


.no-list-style

It removes the list-style-type from the element


.no-float

It removes the float from the element


.no-width

It removes the width from the element


.no-height

It removes the height from the element


.no-opacity

It removes the opacity from the element

/*
  RESETS
*/
@mixin Resets(){
  .#{$prefix}{
    &--transform-none{
      text-transform: initial;
    }
    &--white-space-normal{
      white-space: normal;
    }
    &--decoration-none{
      text-decoration: none;
    }
    &--weight-normal{
      font-weight: normal;
    }    
  }
}
/*
  HIDDINGS
*/
@mixin Hiddings(){
  .invisible{ 
    visibility: hidden; 
  } 
  .hidden{ 
    display: none; 
  } 
  .transparent{ 
    opacity: 0; 
  } 
  .offscreen{ 
    position: fixed; 
    opacity: 0; 
    top: -100%; 
    left: -100%; 
    height: 0; 
    width: 0; 
    z-index: -1; 
    overflow: hidden; 
  }
  .after-none{
    &:after{
      content: none !important;
    }
  }
  .before-none{
    &:before{
      content: none !important;
    }
  }  
}