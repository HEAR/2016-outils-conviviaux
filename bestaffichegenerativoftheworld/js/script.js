var typo = ['autopia', 'charis', 'clearsans', 'combat', 'eczar', 'fengardo', 'gapsans', 'lilgrotesk', 'manifont', 'pressuru', 'savate', 'sinkin'];

function resizeFont(elemToR){
   var parentW = elemToR.offsetWidth;
    
    $(elemToR).find('.row').each(function(n) {

      var newFontSize = (parentW / this.offsetWidth) * 9.9*3;


      //console.log(parentW,this.offsetWidth,newFontSize);
        
      this.style.fontSize = newFontSize + 'px';
      this.style.lineHeight = '1em'; //ça vous pouvez changer
    });
}

function randomType(elem){
  $(elem).find('.row').each(function(n) {
    var font = typo[Math.floor(Math.random()*typo.length)];
    $(this).css('font-family', font);

  });
}

function adaptMargin(elem){
  var heightCont = $(".container").height();
  var heightJustif = $(".justify").outerHeight();
  var heightFixe = $(".fixe").outerHeight();
  var cumul = heightCont - (heightJustif + heightFixe);
  var margin = cumul / 15;
  console.log(heightCont, cumul, margin);
  $(elem).find('.row').each(function(n) {
    $(this).css({"margin-bottom": margin+"px", "display":"block"});    
  });
  $(".fixe").css("bottom", "0");
}

function textOverflow(){
  var heightCont = $(".container").height();
  var heightJustif = $(".justify").outerHeight();
  var heightFixe = $(".fixe").outerHeight();
  //console.log(heightJustif + heightFixe, heightCont)
  if ((heightJustif + heightFixe)  > heightCont){
    return true;
  }
  else{
    return false;
  }
}

function reduceType(elem){
  $(elem).find('.row').each(function(n) {
    var oldSize = $(this).css("font-size").replace("px", "");
    var newSize = oldSize / 1.5;
    $(this).css({"font-size": newSize});
    console.log(newSize);

  });
  $(".fixe").css("bottom", "0");

}

$(document).ready(function() {
    $(window).load(function(){
      $('.justify').each(function() {
        randomType(this);
        resizeFont(this);
        if(textOverflow()){
          reduceType(this);
        }
        else{adaptMargin(this);}
      });
      console.log(textOverflow());
    });
    
});





