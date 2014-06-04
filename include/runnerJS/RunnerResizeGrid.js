
Runner.namespace('Runner.resize');Runner.resize.Grid=Runner.extend(Runner.emptyFn,{pageId:-1,gridSettings:null,columnObjs:null,columnNames:null,firstTime:false,isShowRows:false,isUseInlineAdd:false,isShowAddInPopup:false,constructor:function(cfg){Runner.apply(this,cfg);this.gridSettings={};this.pageObj=Runner.pages.PageManager.getAt(this.tName,this.pageId);this.firstTime=Runner.pages.PageSettings.getTableData(this.tName,"pageMode")!=Runner.pages.constants.LIST_AJAX;this.isShowRows=Runner.pages.PageSettings.getTableData(this.tName,"showRows");this.isUseInlineAdd=Runner.pages.PageSettings.getTableData(this.tName,"isInlineAdd");this.isShowAddInPopup=Runner.pages.PageSettings.getTableData(this.tName,"showAddInPopup");},init:function(){if(!this.isUseInlineAdd&&!this.isShowRows){return false;}
if(!$(document.body).hasClass('yui3-skin-sam')){$(document.body).addClass('yui3-skin-sam');}
this.gridSettings.classes={table:this.pageObj.gridElem[0].className};this.gridSettings.styles={table:this.pageObj.gridElem.attr('style')||''};this.parseGridHeader();this.parseGridBodyFoot();},hasColRowSpans:function(cell){if(cell.colspan||cell.rowspan){return true;}
return false;},isNotMatch:function(){return!$(this).closest('table').hasClass('runner-c-grid');},parseGridHeader:function(){var Y=this.pageObj.Y,self=this,initCookies=new Array(),gridCookies=Y.Cookie.get(self.pageObj.shortTName);this.columnObjs=[];this.gridSettings.ieconts={ths:[]};this.gridSettings.classes.thead={trs:[],ths:[]};this.gridSettings.styles.thead={trs:[],ths:[]};$('thead tr.runner-toprow',this.pageObj.gridElem).each(function(i){var columnId=0;self.gridSettings.classes.thead.trs[i]=this.className;self.gridSettings.styles.thead.trs[i]=$(this).attr('style')||'';$("th",this).not(self.isNotMatch).each(function(){if(self.hasColRowSpans(this)){return;}
self.columnObjs[columnId]={key:"column"+columnId,label:$(this).html()||'&nbsp;',allowHTML:true,sortable:false};if(!gridCookies){initCookies[initCookies.length]=this.offsetWidth;}
self.gridSettings.ieconts.ths[columnId]=$(this).attr('ieditcont')!=undefined||"";self.gridSettings.classes.thead.ths[columnId]=this.className;self.gridSettings.styles.thead.ths[columnId]=$(this).attr('style')||'';columnId++;});});if(!gridCookies){Y.Cookie.set(this.pageObj.shortTName,Y.JSON.stringify(initCookies));}},parseGridBodyFoot:function(){var self=this,areaCodes=[],numColumns=0;this.gridSettings.rowids=[];this.gridSettings.ieconts.tds=[];this.gridSettings.classes.tbody={trs:[],tds:[]};this.gridSettings.styles.tbody={trs:[]};$("tbody tr.runner-row, tbody tr.runner-bottomrow",this.pageObj.gridElem).each(function(i){self.gridSettings.classes.tbody.trs[i]=this.className;self.gridSettings.styles.tbody.trs[i]={tr:$(this).attr('style')||'',tds:[]};self.gridSettings.rowids[i]=this.id;var areaCode={},columnId=0,parseColumn=false;if(self.isShowRows&&(self.isUseInlineAdd&&i==1||!self.isUseInlineAdd&&!i)||!self.isShowRows&&self.isUseInlineAdd&&!i){parseColumn=true;}
$('td',this).not(self.isNotMatch).each(function(j){if(self.hasColRowSpans(this)){return;}
if($(this).hasClass("runner-cl")||$(this).hasClass("runner-cr")||$(this).parent().hasClass("runner-bottomrow")){areaCode[self.columnObjs[columnId].key]=$(this).html();}else{areaCode[self.columnObjs[columnId].key]="<div class='runner-resize-cellwrapper'>"+$(this).html()+"</div>";}
self.gridSettings.styles.tbody.trs[i].tds[columnId]=$(this).attr('style')||'';if(parseColumn){self.gridSettings.classes.tbody.tds[columnId]=this.className;self.gridSettings.ieconts.tds[columnId]=$(this).attr('ieditcont')||'';}
columnId++;numColumns++;});areaCodes[areaCodes.length]=areaCode;});this.createResizeGrid(areaCodes);},createResizeGrid:function(Data){var Y=this.pageObj.Y,self=this,gridPar=self.pageObj.gridElem.parent();var table=new Y.DataTable.Base({columns:self.columnObjs,data:Data});gridPar.empty();table.render(gridPar[0]);var newGridElem=self.setOldGridSettings();newGridElem.css({"overflow":"hidden","table-layout":"fixed"});$('th',gridPar).not('.runner-cl, .runner-cr').not(this.isNotMatch).each(function(){$(this).html("<div class='runner-resize-cellwrapper' style='width: "+$(this).width()+"px; white-space: nowrap;'>"+$(this).html()+"</div>");var handle=Runner.isDirRTL()?'l':'r';var resize=new Y.Resize({node:this,handles:handle,defMinWidth:0});if(Y.UA.ie){resize.delegate.dd._move=function(ev){ev.pageX=window.event.screenX;return Y.DD.Drag.prototype._move.call(resize.delegate.dd,ev);}
resize.delegate.dd.on('drag:mouseDown',function(e){e.ev.pageX=window.event.screenX;});}
var resizeEventType='resize:resize';if(Y.UA.gecko){resizeEventType='resize:align';}
resize.on(resizeEventType,function(event){this._defResizeAlignFn(event);event.preventDefault();var gridCookies=Y.JSON.parse(Y.Cookie.get(self.pageObj.shortTName)),oldCellWidth=this.get("node").getDOMNode().offsetWidth,newCellWidth=this.info.offsetWidth;cellIndex=this.get("node").getDOMNode().cellIndex,gridWidth=self.pageObj.gridElem[0].offsetWidth;$(self.pageObj.gridElem).css('width',gridWidth+(newCellWidth-oldCellWidth)+'px');$(".yui3-datatable-col-"+$(this.get("node").getDOMNode()).attr("data-yui3-col-id"),gridPar).css("width",this.info.offsetWidth+"px");$(".yui3-datatable-col-"+$(this.get("node").getDOMNode()).attr("data-yui3-col-id")+' div.runner-resize-cellwrapper',gridPar).css("width",this.info.offsetWidth+"px");gridCookies[cellIndex]=newCellWidth;Y.Cookie.set(self.pageObj.shortTName,Y.JSON.stringify(gridCookies));});if(Runner.isDirRTL()){resize.on("drag:start",function(){Y.DD.DDM._pg.setStyles({left:'auto',right:'0'});});}
resize.on("resize:end",function(event){event.preventDefault();});if(Y.UA.gecko||Y.UA.ie){var node=$('<div style="position:relative"></div>');$(this).children().appendTo(node);node.appendTo(this);}else{$(this).css("position","relative");}});if(Runner.isDirRTL()){Y.DD.DDM._pg.setStyles({left:'auto',right:'0'});}
newGridElem.css('width',this.totalGridWidth+'px');this.pageObj.initViewControls();},setOldGridSettings:function(){var self=this;var newGridElem=$('.runner-s-grid table.yui3-datatable-table',this.pageObj.pageCont);if(!this.isShowRows){$(newGridElem).hide();}
newGridElem.parent().addClass("runner-s-grid").addClass("not-container");newGridElem.parent().parent().addClass("runner-c-grid");newGridElem.addClass(this.gridSettings.classes.table);if(this.gridSettings.styles.table){newGridElem.attr('style',this.gridSettings.styles.table);}
var gridCookies=this.pageObj.Y.JSON.parse(this.pageObj.Y.Cookie.get(this.pageObj.shortTName));this.totalGridWidth=0;$('thead tr',newGridElem).not(this.isNotMatch).each(function(i){$(this).addClass(self.gridSettings.classes.thead.trs[i]);if(self.gridSettings.styles.thead.trs[i]){$(this).attr('style',self.gridSettings.styles.thead.trs[i]);}
$('th',this).not(self.isNotMatch).each(function(j){$(this).addClass(self.gridSettings.classes.thead.ths[j]);if(self.gridSettings.styles.thead.ths[j]){$(this).attr('style',self.gridSettings.styles.thead.ths[j]);}
if(!$(this).hasClass("runner-cl")&&!$(this).hasClass("runner-cr")&&gridCookies[j]!==0){$(this).css('width',gridCookies[j]+'px');}else{$(this).css('width',$(this).width()+'px');}
self.totalGridWidth+=$(this).width();if(self.gridSettings.ieconts[j]){$(this).attr('ieditcont')=self.gridSettings.ieconts.ths[j];}});});$('tbody.yui3-datatable-data tr',newGridElem).not(this.isNotMatch).each(function(i){$(this).addClass(self.gridSettings.classes.tbody.trs[i]);var isRowTFoot=false;if($(this).hasClass('footer')){isRowTFoot=true;}
this.id=self.gridSettings.rowids[i];if(!isRowTFoot&&self.gridSettings.styles.tbody.trs[i].tr){$(this).attr('style',self.gridSettings.styles.tbody.trs[i].tr);}
$('td',this).not(self.isNotMatch).each(function(j){$(this).addClass(self.gridSettings.classes.tbody.tds[j]);if(!isRowTFoot){if(self.gridSettings.styles.tbody.trs[i].tds[j]){$(this).attr('style',self.gridSettings.styles.tbody.trs[i].tds[j]);}
if(self.gridSettings.ieconts[j]){$(this).attr('ieditcont')=self.gridSettings.ieconts.tds[j];}}});});return newGridElem;}});