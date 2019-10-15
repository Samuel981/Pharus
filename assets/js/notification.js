document.addEventListener('DOMContentLoaded', function(){
	if(Notification.permission !== 'granted')
		Notification.requestPermission();
});

function notifyMe(icon, title, mensagem, link){
	if(!Notification){
		alert('O navegador que você está utilizando não conseguiu exibir a notificação. Tente acessar com outro navegador');
		return;
	}

	if(Notification.permission !== "granted"){
		Notification.requestPermission();
	}else{
		var notification = new Notification(title, {
			icon: icon,
			body: mensagem
		});

		notification.onclick = function(){
			window.open(link);
			notification.close(notification);
		};
	}
}

	var icon = 'http://localhost/pharus/assets/img/logo.png';
	var title = 'O seu consumo hoje ultrapssou o limite!';
	var mensagem = 'Lorem ipsum dolor sit amet, consectetur.';
	var link = 'http://localhost/pharus/';

	data=new Date();
	var horaAtual = data.getHours();
	var minutoAtual = data.getMinutes();
	var horas = localStorage.getItem('horas');
	var minutos = localStorage.getItem('minutos');

	if (horaAtual==horas) {
		if(minutoAtual==minutos){
			notifyMe(icon, title, mensagem, link);
			//sleep(3600);
		}
	}