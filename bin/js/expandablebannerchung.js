/*
 * Expandable banner for BannerChung
 * Originally written by Seph
 */

var expBannerCtl = expBannerCtl || {data:{}};
expBannerCtl.initExpBanner = function(holderId, state1Url, state2Url, expandWid, expandHei, offsetX, offsetY, clickurl) {
	var holder = $('div#'+holderId);
	var orWid = holder.width();
	var orHei = holder.height();
	var orLeft = holder.css('left');
	var orTop = holder.css('top');
	this.data[holderId] = {
		holderId:holderId,
		state1Url:state1Url,
		state2Url:state2Url,
		expandWid:expandWid,
		expandHei:expandHei,
		offsetX:offsetX,
		offsetY:offsetY,
		clickurl:clickurl,
		orWid:orWid,
		orHei:orHei,
		orLeft:orLeft,
		orTop:orTop,
		inv:-1
		};
	this.insertBanner(holder, state1Url, orWid, orHei, orLeft, orTop, clickurl);
	this.prepareOn(holderId);
}

expBannerCtl.prepareOn = function(holderId) {
	var holder = $('div#'+holderId);
	holder.one('mouseover', function() {
		var scope = $(this);
		clearInterval(expBannerCtl.data[holderId]['inv']);
		var count = 2;
		var exited = false;
		var cd = function() {
			count--;
			if(count == 0) {
				clearInterval(expBannerCtl.data[holderId]['inv']);
				if(exited) {
					expBannerCtl.prepareOn(holderId);
				} else {
					doExp();
				}
			}
		}
		expBannerCtl.data[holderId]['inv'] = setInterval(cd, 1000);
		scope.one('mouseout', function() {
			exited = true;
		});
		var doExp = function() {
			scope.off('mouseout');
			// this is all that's important
			var data = expBannerCtl.data[holderId];
			expBannerCtl.insertBanner(scope, data.state2Url, data.expandWid, data.expandHei, data.offsetX, data.offsetY, data.clickurl);
			expBannerCtl.prepareOff(holderId);
			// end most important section
		}
	});
}

expBannerCtl.prepareOff = function(holderId) {
	var holder = $('div#'+holderId);
	holder.one('mouseout', function() {
		var data = expBannerCtl.data[holderId];
		expBannerCtl.insertBanner($(this), data.state1Url, data.orWid, data.orHei, data.orLeft, data.orTop, data.clickurl);
		expBannerCtl.prepareOn(holderId);
	});
}

expBannerCtl.insertBanner = function(holderDiv, path, wid, hei, offsetX, offsetY, clickurl) {

	var randid = Math.random()*99999999;

	var toInsert = "";
	toInsert += '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="'+wid+'" height="'+hei+'" id="'+randid+'" name="'+randid+'">';
	toInsert += '<param name="movie" value="'+path+'" />';
	toInsert += '<param name="salign" value="tl" />';
	toInsert += '<param name="scale" value="noscale" />';
	toInsert += '<param name="wmode" value="transparent" />';
	toInsert += '<param name="flashvars" value="clickTAG='+clickurl+'" />';
	toInsert += '<!--[if !IE]>-->';
	toInsert += '<object type="application/x-shockwave-flash" data="'+path+'" width="'+wid+'" height="'+hei+'" id="'+randid+'" name="'+randid+'">';
	toInsert += '<param name="salign" value="tl" />';
	toInsert += '<param name="scale" value="noscale" />';
	toInsert += '<param name="wmode" value="transparent" />';
	toInsert += '<param name="flashvars" value="clickTAG='+clickurl+'" />';
	toInsert += '<!--<![endif]-->';
	toInsert += '<p>You need Adobe Flash Player to display this content.</p>';
	toInsert += '<!--[if !IE]>-->';
	toInsert += '</object>';
	toInsert += '<!--<![endif]-->';
	toInsert += '</object>';

	holderDiv.html(toInsert);
	holderDiv.css('left', offsetX);
	holderDiv.css('top', offsetY);
}