<style>
    #directive-cards .header-3 {
        background: url('http://adicts.wapsite.me/1con/header/header_1.png') center / cover;
***REMOVED***
</style>
<div class="mdl-card__title header-3"></div>
<div class="mdl-card__title header-title">
    <h2 class="mdl-card__title-text">Mensajes Anonimos</h2>
</div>
<div class="mdl-card__supporting-text">
    <h1>Redacta el mensaje</h1>
    <p>Aqui puedes mandar mensajes anonimos a tu giftee. Dile y preguntale todo lo que quieras, los mensajes seran enviados a su correo electronico.
    Una vez que el haya recibido el correo, podra editar sus respuesta para ayudarte en tu busqueda del regalo perfecto.</p>

    <form id="form-message" action="***REMOVED*** echo $_SERVER['PHP_SELF'];***REMOVED***" method="post" style="width:100%">
        <div class="mdl-textfield mdl-js-textfield" style="width:inherit">
            <textarea class="mdl-textfield__input" rows="5" id="message-text" name="message-text" style="width:inherit"></textarea>
            <label class="mdl-textfield__label" for="message-text">Escribe aqui tu correo...</label>
        </div>
    </form>
</div>