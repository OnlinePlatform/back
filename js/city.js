$(function(){
	var city=[{"id":"345","name":"阿坝"},{"id":"233","name":"定安"},{"id":"419","name":"安庆"},{"id":"115","name":"鞍山"},{"id":"321","name":"安顺"},{"id":"180","name":"安阳"},{"id":"475","name":"澳门"},{"id":"111","name":"白城"},{"id":"297","name":"百色"},{"id":"109","name":"白山"},{"id":"237","name":"白沙"},{"id":"170","name":"保定"},{"id":"157","name":"宝鸡"},{"id":"305","name":"保山"},{"id":"241","name":"保亭"},{"id":"349","name":"包头"},{"id":"355","name":"巴彦淖尔"},{"id":"292","name":"北海"},{"id":"a","name":"北京"},{"id":"414","name":"蚌埠"},{"id":"117","name":"本溪"},{"id":"142","name":"滨州"},{"id":"426","name":"亳州"},{"id":"173","name":"沧州"},{"id":"238","name":"昌江"},{"id":"113","name":"长春"},{"id":"217","name":"常德"},{"id":"225","name":"长沙"},{"id":"147","name":"长治"},{"id":"246","name":"常州"},{"id":"424","name":"巢湖"},{"id":"285","name":"潮州"},{"id":"172","name":"承德"},{"id":"348","name":"成都"},{"id":"235","name":"澄迈"},{"id":"220","name":"郴州"},{"id":"351","name":"赤峰"},{"id":"427","name":"池州"},{"id":"d","name":"重庆"},{"id":"301","name":"崇左"},{"id":"421","name":"滁州"},{"id":"314","name":"大理"},{"id":"114","name":"大连"},{"id":"118","name":"丹东"},{"id":"229","name":"儋州"},{"id":"96","name":"大庆"},{"id":"145","name":"大同"},{"id":"331","name":"德阳"},{"id":"140","name":"德州"},{"id":"317","name":"迪庆"},{"id":"232","name":"东方市"},{"id":"283","name":"东莞"},{"id":"131","name":"东营"},{"id":"353","name":"鄂尔多斯"},{"id":"206","name":"恩施"},{"id":"199","name":"鄂州"},{"id":"272","name":"佛山"},{"id":"116","name":"抚顺"},{"id":"121","name":"阜新"},{"id":"422","name":"阜阳"},{"id":"449","name":"福州"},{"id":"262","name":"赣州"},{"id":"288","name":"广州"},{"id":"290","name":"桂林"},{"id":"327","name":"贵阳"},{"id":"104","name":"哈尔滨"},{"id":"243","name":"海口"},{"id":"397","name":"哈密"},{"id":"168","name":"邯郸"},{"id":"440","name":"杭州"},{"id":"161","name":"汉中"},{"id":"181","name":"鹤壁"},{"id":"429","name":"合肥"},{"id":"101","name":"黑河"},{"id":"214","name":"衡阳"},{"id":"175","name":"衡水"},{"id":"404","name":"和田"},{"id":"280","name":"河源"},{"id":"143","name":"菏泽"},{"id":"250","name":"淮安"},{"id":"417","name":"淮北"},{"id":"222","name":"怀化"},{"id":"415","name":"淮南"},{"id":"203","name":"黄冈"},{"id":"420","name":"黄山"},{"id":"195","name":"黄石"},{"id":"360","name":"呼和浩特"},{"id":"277","name":"惠州"},{"id":"126","name":"葫芦岛"},{"id":"433","name":"湖州"},{"id":"98","name":"佳木斯"},{"id":"273","name":"江门"},{"id":"263","name":"吉安"},{"id":"183","name":"焦作"},{"id":"432","name":"嘉兴"},{"id":"286","name":"揭阳"},{"id":"105","name":"吉林"},{"id":"144","name":"济南"},{"id":"148","name":"晋城"},{"id":"257","name":"景德镇"},{"id":"200","name":"荆门"},{"id":"202","name":"荆州"},{"id":"435","name":"金华"},{"id":"134","name":"济宁"},{"id":"150","name":"晋中"},{"id":"119","name":"锦州"},{"id":"259","name":"九江"},{"id":"93","name":"鸡西"},{"id":"177","name":"开封"},{"id":"403","name":"喀什"},{"id":"395","name":"克拉玛依"},{"id":"318","name":"昆明"},{"id":"138","name":"莱芜"},{"id":"174","name":"廊坊"},{"id":"379","name":"兰州"},{"id":"394","name":"拉萨"},{"id":"336","name":"乐山"},{"id":"249","name":"连云港"},{"id":"141","name":"聊城"},{"id":"122","name":"辽阳"},{"id":"107","name":"辽源"},{"id":"307","name":"丽江"},{"id":"153","name":"临汾"},{"id":"240","name":"陵水"},{"id":"139","name":"临沂"},{"id":"439","name":"丽水"},{"id":"425","name":"六安"},{"id":"319","name":"六盘水"},{"id":"289","name":"柳州"},{"id":"447","name":"龙岩"},{"id":"223","name":"娄底"},{"id":"187","name":"漯河"},{"id":"178","name":"洛阳"},{"id":"330","name":"泸州"},{"id":"154","name":"吕梁"},{"id":"416","name":"马鞍山"},{"id":"275","name":"茂名"},{"id":"338","name":"眉山"},{"id":"278","name":"梅州"},{"id":"332","name":"绵阳"},{"id":"100","name":"牡丹江"},{"id":"267","name":"南昌"},{"id":"337","name":"南充"},{"id":"256","name":"南京"},{"id":"302","name":"南宁"},{"id":"248","name":"南通"},{"id":"189","name":"南阳"},{"id":"430","name":"宁波"},{"id":"448","name":"宁德"},{"id":"123","name":"盘锦"},{"id":"329","name":"攀枝花"},{"id":"179","name":"平顶山"},{"id":"258","name":"萍乡"},{"id":"442","name":"莆田"},{"id":"185","name":"濮阳"},{"id":"325","name":"黔东南"},{"id":"208","name":"潜江"},{"id":"323","name":"黔西南"},{"id":"128","name":"青岛"},{"id":"282","name":"清远"},{"id":"167","name":"秦皇岛"},{"id":"294","name":"钦州"},{"id":"228","name":"琼海"},{"id":"242","name":"琼中"},{"id":"92","name":"齐齐哈尔"},{"id":"99","name":"七台河"},{"id":"444","name":"泉州"},{"id":"303","name":"曲靖"},{"id":"436","name":"衢州"},{"id":"137","name":"日照"},{"id":"188","name":"三门峡"},{"id":"226","name":"三亚"},{"id":"b","name":"上海"},{"id":"190","name":"商丘"},{"id":"266","name":"上饶"},{"id":"271","name":"汕头"},{"id":"279","name":"汕尾"},{"id":"268","name":"韶关"},{"id":"434","name":"绍兴"},{"id":"215","name":"邵阳"},{"id":"127","name":"沈阳"},{"id":"269","name":"深圳"},{"id":"176","name":"石家庄"},{"id":"196","name":"十堰"},{"id":"361","name":"石嘴山"},{"id":"149","name":"朔州"},{"id":"106","name":"四平"},{"id":"205","name":"随州"},{"id":"255","name":"宿迁"},{"id":"247","name":"苏州"},{"id":"135","name":"泰安"},{"id":"450","name":"台北"},{"id":"155","name":"太原"},{"id":"453","name":"台中"},{"id":"254","name":"泰州"},{"id":"438","name":"台州"},{"id":"41","name":"塘沽"},{"id":"166","name":"唐山"},{"id":"c","name":"天津"},{"id":"369","name":"天水"},{"id":"124","name":"铁岭"},{"id":"108","name":"通化"},{"id":"418","name":"铜陵"},{"id":"322","name":"铜仁"},{"id":"396","name":"吐鲁番"},{"id":"234","name":"屯昌县"},{"id":"231","name":"万宁"},{"id":"133","name":"潍坊"},{"id":"136","name":"威海"},{"id":"159","name":"渭南"},{"id":"230","name":"文昌"},{"id":"431","name":"温州"},{"id":"350","name":"乌海"},{"id":"211","name":"武汉"},{"id":"413","name":"芜湖"},{"id":"356","name":"乌兰察布"},{"id":"412","name":"乌鲁木齐"},{"id":"244","name":"无锡"},{"id":"441","name":"厦门"},{"id":"165","name":"西安"},{"id":"213","name":"湘潭"},{"id":"204","name":"咸宁"},{"id":"207","name":"仙桃"},{"id":"158","name":"咸阳"},{"id":"169","name":"邢台"},{"id":"387","name":"西宁"},{"id":"182","name":"新乡"},{"id":"191","name":"信阳"},{"id":"260","name":"新余"},{"id":"152","name":"忻州"},{"id":"313","name":"西双版纳"},{"id":"428","name":"宣城"},{"id":"186","name":"许昌"},{"id":"245","name":"徐州"},{"id":"342","name":"雅安"},{"id":"160","name":"延安"},{"id":"251","name":"盐城"},{"id":"281","name":"阳江"},{"id":"146","name":"阳泉"},{"id":"252","name":"扬州"},{"id":"132","name":"烟台"},{"id":"339","name":"宜宾"},{"id":"197","name":"宜昌"},{"id":"97","name":"伊春"},{"id":"264","name":"宜春"},{"id":"365","name":"银川"},{"id":"120","name":"营口"},{"id":"219","name":"益阳"},{"id":"216","name":"岳阳"},{"id":"296","name":"玉林"},{"id":"162","name":"榆林"},{"id":"151","name":"运城"},{"id":"287","name":"云浮"},{"id":"304","name":"玉溪"},{"id":"130","name":"枣庄"},{"id":"218","name":"张家界"},{"id":"171","name":"张家口"},{"id":"445","name":"漳州"},{"id":"274","name":"湛江"},{"id":"276","name":"肇庆"},{"id":"194","name":"郑州"},{"id":"253","name":"镇江"},{"id":"284","name":"中山"},{"id":"364","name":"中卫"},{"id":"192","name":"周口"},{"id":"437","name":"舟山"},{"id":"270","name":"珠海"},{"id":"193","name":"驻马店"},{"id":"212","name":"株洲"},{"id":"129","name":"淄博"},{"id":"328","name":"自贡"},{"id":"320","name":"遵义"}];    
    {
    		var n;
    		for(n in city){
    			console.log(city[n].name);
    			$('#city').append('<option value='+city[n].name+'>');
    		}
    }
});