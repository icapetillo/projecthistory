window.addEvent('domready', function() {
    var helpTips = new Tips($$('.helpTips'), {
        fixed:true, // tip must be fixed
        offsets: {
           x: 0,
           y: 0
        },
        hideDelay: 1000
    });
    helpTips.removeEvents();
    helpTips.addEvent('show', function(tip){
       
          // realign tips to be bottom justified
          tip.setStyle('top',"");
          tip.setStyle('left',"5px");
          tip.setStyle('bottom',"5px");
       
       tip.fade('in');
    });
    helpTips.addEvent('show', function(tip){tip.fade('in');});
    helpTips.addEvent('hide', function(tip){tip.fade('out');});
    
      var wait = setInterval(function(){
          clearInterval(wait);
          document.getElement('.helpTips').fireEvent('mouseleave');
      }, 3000); 
      var wait = setInterval(function(){
          clearInterval(wait);
          document.getElement('.helpTips').fireEvent('mouseenter'); 
      }, 0); 
    
});
