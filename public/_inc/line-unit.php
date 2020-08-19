<section class="section mb-large">
    <div class="container-large">
        <div class="feedback__container">
            <div class="container">
                <form class="feedback js-form" action="/?ajaxAction=formQuestion" data-name="question">
                    <div class="feedback__wrapper"><h2 class="feedback__title">Появились вопросы?</h2>
                        <p class="feedback__subtitle">Оставьте свой телефон и мы свяжемся с вами</p></div>
                    <div class="feedback__wrapper">
                        <div class="feedback__form">
                            <div class="feedback__inputs-wrapper">
                                <div class="feedback__input">
                                    <div class="input js-input">
                                        <input class="input__field" type="text" name="name" placeholder="Имя"
                                               data-validate="required,name"/>
                                        <div class="input__error">
                                        </div>
                                    </div>
                                </div>
                                <div class="feedback__input">
                                    <div class="input js-input">
                                        <input class="input__field" type="text" name="phone" placeholder="Телефон"
                                               data-validate="required,phone"
                                               data-masking="phone"/>
                                        <div class="input__error"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="feedback_checkbox">
                                <div class="checkbox js-checkbox"><label class="checkbox__label">
                                        <input class="checkbox__field" type="checkbox" data-validate="required"/>
                                        <div class="checkbox__custom checkbox__custom--border"></div>
                                        <div class="checkbox__text">Подтверждаю согласие с
                                            <a class="checkbox__link" href="#" target="_blank">
                                                политикой обработки персональных данных</a>
                                        </div>
                                    </label>
                                    <div class="checkbox__error"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="feedback__button">
                        <button class="button button--primary" type="submit"><span>Отправить</span></button>
                    </div>
                    <div></div>
                    <div class="feedback__response"></div>
                </form>
            </div>
        </div>
    </div>

</section>