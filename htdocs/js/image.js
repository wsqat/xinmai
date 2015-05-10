
var flag=false;
function AXImg(ximg){
var image=new Image();
var iwidth = 400; //图片宽度
var iheight = 300; //图片高度
image.src=ximg.src;
if(image.width>0 && image.height>0){
flag=true;
if(image.width/image.height>= iwidth/iheight){
if(image.width>iwidth){ 
ximg.width=iwidth;
ximg.height=(image.height*iwidth)/image.width;
}else{
ximg.width=image.width; 
ximg.height=image.height;
}
ximg.alt=image.width+"×"+image.height;
}
else{
if(image.height>iheight){ 
ximg.height=iheight;
ximg.width=(image.width*iheight)/image.height; 
}else{
ximg.width=image.width; 
ximg.height=image.height;
}
ximg.alt=image.width+"×"+image.height;
}
}
} 