<section class="sub__cover start__project">
    <div class="container">
        <div class="start__project__text">
            <h1>
                Comienza hoy a tener tu propia página web y presenta tu trabajo de manera profesional y <i class="text__gold">accesible a todo el mundo</i>.
            </h1>

            <p>
                Felicidades por tomar la decisión de tener tu propia página web, ahora solo necesitas llenar el siguiente formulario y en menos de 24 horas te estaré contactando para darte un presupuesto y comenzar a trabajar en tu proyecto.
            </p>
        </div>
        <div class="start__project__form">
            <div class="start__project__form__content">
                <!-- Necesitamos aqui un formulario donde pueda capturar el nombre completo, correo electrónico, un resumen de lo que quiere hacer y un select con las opciones de presupuesto. -->
                <form action="" method="post">
                    <div class="form__group">
                        <label for="name">Nombre completo</label>
                        <input type="text" name="name" id="name" placeholder="Escribe tu nombre completo" autofocus>
                    </div>
                    <div class="form__group">
                        <label for="email">Correo electrónico</label>
                        <input type="email" name="email" id="email" placeholder="Escribe tu correo electrónico">
                    </div>
                    <div class="form__group">
                        <label for="summary">Resumen de tu proyecto</label>
                        <textarea name="summary" id="summary" cols="30" rows="4" placeholder="Escribe un resumen de tu proyecto"></textarea>
                    </div>
                    <div class="form__group">
                        <label for="budget">Presupuesto</label>
                        <select name="budget" id="budget">
                            <option value="0-3000">Menos de $3,000 MXN</option>
                            <option value="3000-5000">$3,000 MXN - $5,000 MXN</option>
                            <option value="5000-10000">$5,000 MXN - $10,000 MXN</option>
                            <option value="10000-20000">$10,000 MXN - $20,000 MXN</option>
                            <option value="20000-0">$20,000 MXN - en adelante</option>
                        </select>
                    </div>

                    <!-- El usuario debe aceptar los términos y condiciones de la página web. -->
                    <div class="form__group terms__and__conditions">
                        <input type="checkbox" name="terms" id="terms">
                        <label for="terms">Acepto los <a href="{{ route('terms') }}">términos y condiciones</a> de la página web</label>
                    </div>

                    <div>
                        <button type="submit" class="btn__third mt__2">
                            Enviar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>