
(function($,Edge,compId){var Composition=Edge.Composition,Symbol=Edge.Symbol;
//Edge symbol: 'stage'
(function(symbolName){})("stage");
//Edge symbol end:'stage'

//=========================================================

//Edge symbol: 'Jam-Pasir'
(function(symbolName){Symbol.bindTriggerAction(compId,symbolName,"Default Timeline",2500,function(sym,e){sym.play("a");});
//Edge binding end
})("Jam-Pasir");
//Edge symbol end:'Jam-Pasir'

//=========================================================

//Edge symbol: 'icon_back'
(function(symbolName){Symbol.bindElementAction(compId,symbolName,"${_icon_backFIX2}","click",function(sym,e){sym.play("c");});
//Edge binding end
Symbol.bindElementAction(compId,symbolName,"${_icon_backFIX2}","mouseover",function(sym,e){sym.play("b");});
//Edge binding end
Symbol.bindElementAction(compId,symbolName,"${_icon_backFIX2}","mouseout",function(sym,e){sym.play("a");});
//Edge binding end
Symbol.bindTriggerAction(compId,symbolName,"Default Timeline",1000,function(sym,e){sym.stop();});
//Edge binding end
Symbol.bindTriggerAction(compId,symbolName,"Default Timeline",2250,function(sym,e){sym.stop();});
//Edge binding end
Symbol.bindTriggerAction(compId,symbolName,"Default Timeline",4000,function(sym,e){sym.stop();});
//Edge binding end
})("icon_back");
//Edge symbol end:'icon_back'

//=========================================================

//Edge symbol: 'icon_edit'
(function(symbolName){Symbol.bindTriggerAction(compId,symbolName,"Default Timeline",1000,function(sym,e){sym.stop();});
//Edge binding end
Symbol.bindTriggerAction(compId,symbolName,"Default Timeline",2250,function(sym,e){sym.stop();});
//Edge binding end
Symbol.bindTriggerAction(compId,symbolName,"Default Timeline",4000,function(sym,e){sym.stop();});
//Edge binding end
Symbol.bindElementAction(compId,symbolName,"${_icon_edit2}","click",function(sym,e){sym.play("c");});
//Edge binding end
Symbol.bindElementAction(compId,symbolName,"${_icon_edit2}","mouseover",function(sym,e){sym.play("b");});
//Edge binding end
Symbol.bindElementAction(compId,symbolName,"${_icon_edit2}","mouseout",function(sym,e){sym.play("a");});
//Edge binding end
})("icon_edit");
//Edge symbol end:'icon_edit'

//=========================================================

//Edge symbol: 'reset-button'
(function(symbolName){Symbol.bindTriggerAction(compId,symbolName,"Default Timeline",1000,function(sym,e){sym.stop();});
//Edge binding end
Symbol.bindTriggerAction(compId,symbolName,"Default Timeline",2250,function(sym,e){sym.stop();});
//Edge binding end
Symbol.bindTriggerAction(compId,symbolName,"Default Timeline",4000,function(sym,e){sym.stop();});
//Edge binding end
Symbol.bindElementAction(compId,symbolName,"${_Text3}","click",function(sym,e){sym.play("c");});
//Edge binding end
Symbol.bindElementAction(compId,symbolName,"${_Text3}","mouseover",function(sym,e){sym.play("b");});
//Edge binding end
Symbol.bindElementAction(compId,symbolName,"${_Text3}","mouseout",function(sym,e){sym.play("a");});
//Edge binding end
})("reset-button");
//Edge symbol end:'reset-button'
})(jQuery,AdobeEdge,"EDGE-10718530");