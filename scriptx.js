var conts = [$("#users"),$("#ucon"),$("#ownx")],
    opk = $("select");
window.onload = () => {
    let el = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
    el.parentNode.removeChild(el);
}
$.post('iplist.php', df=>$.each(df, (r,t)=>optadd(t)));

$("button").click(function() {
    //$("#dark").addClass();
    //alert("sadads");
    uim(getCookie("ui_mode") == 'light' ? 'dark' : 'light');
});
$(document).ready(()=>{
    //alert();
})
uim=m=>{
    nox = new Date();
    nox.setTime(Date.now() + (100*365*24*60*60*1000));
    document.cookie  = `ui_mode=${m}; expires=${nox}`;
    bul=m == 'light';
    $(".dark").prop('disabled', (bul?'disabled':''));
    $('button').html(m.charAt(0).toUpperCase() + m.slice(1));
    //alert(getCookie("ui_mode"));
}
getCookie=cname=>{
  var name = cname + "=";
  var dck = decodeURIComponent(document.cookie);
  var ca = dck.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
optadd=(opx,adx=0)=>{
	var arropt = [];
	$("select option").map(function() {
		arropt.push($(this).val());});
	var indx=arropt.indexOf(opx);
	if (indx==-1) opk.append(`<option>${opx}</option>`);
	if (adx) opk.val(opx);
}
rlx=(svrx, knd=0)=>{
	$.post('reqx.php',{ urlx: svrx, resp: knd }, dx=>{
        if (knd != 0){
            $.post('srv_add.php', {ipx: svrx});
            optadd(svrx, 1);
        }
        $.each(conts, (i,v)=>v.html(''))
        $("#xusers tr:nth-child(n+2)").remove();
        conts[0].html(dx['Users']);
        conts[1].html(dx['srv_stat']);
        conts[2].html(dx['owner']);
        opk.val(svrx);
        $.each(dx["all_stat"],(x,ix)=>{
            $("#xusers").append(
                "<tr><td>"+ix['num']+"</td><td>"+ix['name']+ix['n_stat']+"</td><td>"+ix['sent']+"</td><td>"+ix['recv']+"</td>");
        });
        opk.prevx = svrx;
        //alert(dx);
    }, "json")
        .fail(x=>{
        if (opk.prevx!=null) opk.val(opk.prevx); else 
        	opk.prop('selectedIndex',0);
        alert(`[${x.status}] `+x.responseText);
    })
}
$("form").submit(e=>{
	e.preventDefault();
	var srvx = $("[type='text']").val();
	if (srvx != '') rlx(srvx, 1);
})
$('select').change(function(){
	var tx = $(this);
	if(tx.prop('selectedIndex')) rlx(tx.val());
    //$("select option")[0].disabled = true;
})