INSTRUCTIONS for adding to the sprite sheet

1) go to http://draeton.github.io/stitches/
2) use settings -> import (past download.txt into field and click save)
3) Add to sprite sheet
4) Check data URL and click export
5) Goto Downloads and save out image and css into proper place. 

copy css to _sprite-sheet.scss
rewrite sprite rule with following 

.sprite {
    background-image: url(../images/spritesheet.png);
    background-repeat: no-repeat;
    display: inline-block;
}

download image and name spritesheet.png copy image into /dev/images

If grunt is running it iwll be copied automatically into public directories

** STYLE NOTES
=================================================================================
Style image positions with regular sass, do not add positioning to sprite sheet. 
=================================================================================