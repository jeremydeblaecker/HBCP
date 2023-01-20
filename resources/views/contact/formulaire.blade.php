<div class="row">
    <div class="col-md-4 col-lightGold">
        <p class="b1_titre">Une question ?<br>Contactez-nous !</p>
        <p>Nous vous répondrons au plus vite.</p>
    </div>
    <div class="col-md-4 col-form">
        <form>
            <div class="form-margin">
                <label for="exampleInputSelect1" class="form-label">L'objet de votre demande</label>
                <select class="form-select input_text" aria-label="Choisir l'objet">
                    <option selected>Choisir l'objet</option>
                    <option value="1">Informations</option>
                    <option value="2">Licence</option>
                    <option value="3">Administration</option>
                </select>
            </div>
            <div class="form-margin">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control input_text" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-margin">
                <label for="exampleFormControlTextarea1" class="form-label">Votre message</label>
                <textarea class="form-control input_text" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-contact">Envoyer</button>
        </form>
    </div>
    <div class="col-md-4">
        <div class="img-form">
            <img class="img_contact" src="{{asset('../resources/img/image_contact.png')}}" alt="image contact">
        </div>
    </div>
</div>
