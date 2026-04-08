/* Messengers button JS */
function callbackButtonClick() {
	
	let formBtn = document.getElementById('phoneBtn').style.top;
	
	if ( formBtn == "0px" || formBtn == 0 ) {
		document.getElementById('callbackBtn').style.animation = "none";
		document.getElementById('btnIco').style.animation = "change2 linear .5s";
		document.getElementById('btnIco').style.webkitAnimation = "change2 linear .5s";
		document.getElementById('btnIco').style.webkitTransition ="transform 1s ease-in-out";
		
		document.getElementById('btnIco').style.webkitTransform = "rotate(180deg)";
		document.getElementById('btnIco').style.transform = "rotate(180deg)";
		
		document.getElementById('btnIco').style.backgroundImage = "url(https://domofon62.ru/wp-content/themes/domoftwo/img/messengers-button-img/messengers-button-ico/callback-button-close.png)";
		document.getElementById('btnIco').style.backgroundPosition = "center";
		document.getElementById('btnIco').style.backgroundRepeat = "no-repeat";
		document.getElementById('btnIco').style.webkitBackgroundSize = "cover";
		document.getElementById('btnIco').style.backgroundSize = "cover";
		
		// Показываем кнопки (раскрытие)
		document.getElementById('phoneBtn').style.top = "-60px";
		document.getElementById('phoneBtn').style.opacity = "1";
		
		document.getElementById('telegramBtn').style.top = "-120px";
		document.getElementById('telegramBtn').style.opacity = "1";
		
		document.getElementById('maxBtn').style.top = "-180px";
		document.getElementById('maxBtn').style.opacity = "1";
		
	} else {
		document.getElementById('callbackBtn').style.animation = "waves linear 2s infinite";
		document.getElementById('btnIco').style.animation = "change linear 16s infinite";
		document.getElementById('btnIco').style.webkitTransition ="transform 1s ease-in-out";
		document.getElementById('btnIco').style.webkitAnimation = "change linear 16s infinite";
		document.getElementById('btnIco').style.transform = "rotate(180deg)";
		document.getElementById('btnIco').style.webkitTransform = "rotate(180deg)";
		document.getElementById('btnIco').style.backgroundImage = "url(https://domofon62.ru/wp-content/themes/domoftwo/img/messengers-button-img/messengers-button-ico/callback-button-ico.png)";
		document.getElementById('btnIco').style.backgroundPosition = "center";
		document.getElementById('btnIco').style.backgroundRepeat = "no-repeat";
		document.getElementById('btnIco').style.webkitBackgroundSize = "cover";
		document.getElementById('btnIco').style.backgroundSize = "cover";
		
		// Скрываем кнопки (закрытие)
		document.getElementById('phoneBtn').style.top = "0px";
		document.getElementById('phoneBtn').style.opacity = "0";
		
		document.getElementById('telegramBtn').style.top = "0px";
		document.getElementById('telegramBtn').style.opacity = "0";
		
		document.getElementById('maxBtn').style.top = "0px";
		document.getElementById('maxBtn').style.opacity = "0";
	}
}
/* End messengers button JS */