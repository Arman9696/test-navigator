<section class="section mb-large">
    <div class="container-large">
        <div>
            <div class="form-wide-wrapper form-wide-wrapper--ok form-wide-wrapper--wood">
                <div class="container">
                    <div class="form-wide">
                        <div class="form-wide__left-line"></div>
                        <div class="form-wide__text form-wide__text--vertical-md">
                            <div class="form-wide__title">Задайте вопрос обслуживающей компании!</div>
                            <div class="form-wide__description">Заполните форму ниже, и мы вам перезвоним</div>
                        </div>
                        <form class="form-wide__form form-wide__form--ok js-form"
                              action="/?ajaxAction=formQuestionService"
                              data-name="wide-question">
                            <div class="form-wide__form-item form-wide__form-item--field">
                                <div class="input js-input"><input class="input__field" type="text" name="name"
                                                                   placeholder="Имя"
                                                                   data-validate="required,name"/>
                                    <div class="input__error"></div>
                                </div>
                            </div>
                            <div class="form-wide__form-item form-wide__form-item--field">
                                <div class="input js-input"><input class="input__field" type="text" name="phone"
                                                                   placeholder="Телефон"
                                                                   data-validate="required,phone" data-masking="phone"/>
                                    <div class="input__error"></div>
                                </div>
                            </div>
                            <div class="form-wide__form-item form-wide__form-item--field">
                                <div class="input js-input"><input class="input__field" type="text" name="email"
                                                                   placeholder="Почта"
                                                                   data-validate="required,email"/>
                                    <div class="input__error"></div>
                                </div>
                            </div>
                            <div class="form-wide__form-items-group">
                                <div class="form-wide__form-item form-wide__form-item--select
                                form-wide__form-item--field">
                                    <select class="select js-select" id="select" data-placeholder="Название посёлка">
                                        <option data-placeholder="true"></option>
                                        <option value="Альпийская долина">Альпийская долина</option>
                                        <option value="Есенино">Есенино</option>
                                        <option value="Ёлки">Ёлки</option>
                                        <option value="Ушаково">Ушаково</option>
                                    </select>
                                    <div class="select__error"></div>
                                </div>
                                <div class="form-wide__form-item form-wide__form-item--number
                                form-wide__form-item--field">
                                    <div class="input js-input">
                                        <input class="input__field" type="text" name="areaNumber"
                                               placeholder="№ участка" data-validate="required"/>
                                        <div class="input__error"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-wide__form-item form-wide__form-item--textarea
                            form-wide__form-item--field">
                                <textarea class="modal__textarea js-textarea" placeholder="Вопрос" name="question"
                                        data-validate="required">
                                </textarea>
                                <div class="input__error"></div>
                            </div>
                            <div class="form-wide__form-item form-wide__form-item--policy">
                                <div class="checkbox js-checkbox">
                                    <label class="checkbox__label">
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
                            <div class="form-wide__form-item form-wide__form-item--submit">
                                <button class="button button--primary" type="submit"><span>Отправить</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>