/*
 *
 * Script by http://www.yvoschaap.com
 * http://www.yvoschaap.com/instantedit/
 * 
 */

/* request channel */
function xhr() {};
xhr.prototype.init = function() {
    try {
        this._xh = new XMLHttpRequest();
    } catch (e) {
        var _ie = new Array(
        'MSXML2.XMLHTTP.5.0',
        'MSXML2.XMLHTTP.4.0',
        'MSXML2.XMLHTTP.3.0',
        'MSXML2.XMLHTTP',
        'Microsoft.XMLHTTP'
        );
        var success = false;
        for (var i=0;i < _ie.length && !success; i++) {
            try {
                this._xh = new ActiveXObject(_ie[i]);
                success = true;
            } catch (e) {
                
            }
        }
        if ( !success ) {
            return false;
        }
        return true;
    }
}

xhr.prototype.wait = function() {
    state = this._xh.readyState;
    return (state && (state < 4));
}

xhr.prototype.process = function() {
    if (this._xh.readyState == 4 && this._xh.status == 200) {
        this.processed = true;
    }
}

xhr.prototype.send = function(urlget,data) {
    if (!this._xh) {
        this.init();
    }
    if (!this.wait()) {
        //this._xh.open("GET",urlget,false);
        // changed the below to use POST
        this._xh.open("POST",urlget,false);
        // added the below to set a POST header
        this._xh.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        try {
            this._xh.send(data)
        } catch (e) {
            alert(e);
        }
        if (this._xh.readyState == 4 && this._xh.status == 200) {
            return this._xh.responseText;
        } else {
            // fail
        }
    }
    return data;
}

// var urlBase = "/update.php";
var formVars = "";
var changing = false;


function fieldEnter(campo,evt,idfld) {
    evt = (evt) ? evt : window.event;
    if (evt.keyCode == 13 && campo.value!="") {
        elem = document.getElementById( idfld );
        remote = new xhr;
        // create our POST data
        sendData = "name="+encodeURIComponent(elem.id)+"&value="+encodeURIComponent(campo.value)+"&system_id="+formVars;
        //var sendData = {name: encodeURIComponent(elem.id), value: encodeURIComponent(campo.value)};
        nt = remote.send(urlBase, sendData);
        //nt = remote.send(urlBase + "?fieldname=" +encodeURIComponent(elem.id)+ "&content="+encodeURIComponent(campo.value)+"&"+formVars,"");
        // below was working
        //nt = remote.send(urlBase+"/"+formVars+"/"+encodeURIComponent(elem.id)+"/"+encodeURIComponent(campo.value), encodeURIComponent(campo.value));
        //remove glow
        noLight(elem);
        elem.innerHTML = nt;
        changing = false;
        return false;
    } else {
        return true;
    }


}

function fieldBlur(campo,idfld) {
    if (campo.value!="") {
        elem = document.getElementById( idfld );
        remote = new xhr;
        // create our POST data
        sendData = "name="+encodeURIComponent(elem.id)+"&value="+encodeURIComponent(campo.value)+"&system_id="+formVars;
        //var sendData = {name: encodeURIComponent(elem.id), value: encodeURIComponent(campo.value)};
        nt = remote.send(urlBase, sendData);
        //nt = remote.send(urlBase + "?fieldname=" +encodeURIComponent(elem.id)+ "&content="+encodeURIComponent(campo.value)+"&"+formVars,"");
        // below was working
        // nt = remote.send(urlBase+"/"+formVars+"/"+encodeURIComponent(elem.id)+"/"+encodeURIComponent(campo.value), encodeURIComponent(campo.value));
        elem.innerHTML = nt;
        changing = false;
        return false;
    }
}

//edit field created
function editBox(actual) {
    //alert(actual.nodeName+' '+changing);
    if(!changing){
        width = widthEl(actual.id) + 20;
        height =heightEl(actual.id) + 2;

        if(height < 40){
            if(width < 100) width = 150;
            actual.innerHTML = "<input id=\""+ actual.id +"_field\" style=\"width: "+width+"px; height: "+height+"px;\" maxlength=\"254\" type=\"text\" value=\"" + actual.innerHTML + "\" onkeypress=\"return fieldEnter(this,event,'" + actual.id + "')\" onfocus=\"highLight(this);\" onblur=\"noLight(this); return fieldBlur(this,'" + actual.id + "');\" />";
        }else{
            if(width < 70) width = 90;
            if(height < 50) height = 50;
            actual.innerHTML = "<textarea name=\"textarea\" id=\""+ actual.id +"_field\" style=\"width: "+width+"px; height: "+height+"px;\" onfocus=\"highLight(this);\" onblur=\"noLight(this); return fieldBlur(this,'" + actual.id + "');\">" + actual.innerHTML + "</textarea>";
        }
        changing = true;
    }

        actual.firstChild.focus();
}



//find all span tags with class editText and id as fieldname parsed to update script. add onclick function
function editbox_init(){
    if (!document.getElementsByTagName){ return; }
    var spans = document.getElementsByTagName("span");

    // loop through all span tags
    for (var i=0; i<spans.length; i++){
        var spn = spans[i];

            if (((' '+spn.className+' ').indexOf("editText") != -1) && (spn.id)) {
            spn.onclick = function () { editBox(this); }
            spn.style.cursor = "pointer";
            spn.title = "Click to edit!";   
            }

    }


}

//crossbrowser load function
function addEvent(elm, evType, fn, useCapture)
{
    if (elm.addEventListener){
        elm.addEventListener(evType, fn, useCapture);
        return true;
    } else if (elm.attachEvent){
        var r = elm.attachEvent("on"+evType, fn);
        return r;
    } else {
        //alert("Please upgrade your browser to use full functionality on this page");
    }
}

//get width of text element
function widthEl(span){
    if(document.layers){
        w=document.layers[span].clip.width;
    } else if (document.all && !document.getElementById){
        w=document.all[span].offsetWidth;
    } else if(document.getElementById){
        w=document.getElementById(span).offsetWidth;
    }
    return w;
}

//get height of text element
function heightEl(span){

    if(document.layers){
        h=document.layers[span].clip.height;
    } else if (document.all && !document.getElementById){
        h=document.all[span].offsetHeight;
    } else if(document.getElementById){
        h=document.getElementById(span).offsetHeight;
    }
    return h;
}

function highLight(span){
    //span.parentNode.style.border = "2px solid #D1FDCD";
    //span.parentNode.style.padding = "0";
    span.style.border = "1px solid #54CE43";          
}

function noLight(span){
    //span.parentNode.style.border = "0px";
    //span.parentNode.style.padding = "2px";
    span.style.border = "0px";   
}

//sets post/get vars for update
function setVarsForm(vars){
    formVars  = vars;
}

addEvent(window, "load", editbox_init);