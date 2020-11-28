<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="form mt-3">
                <form id="formStudents" method="post" class="needs-validation" novalidate>
                    <p class="h2 mt-3">Сведения об ученике</p>
                    <div class="form-row mt-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lastName">Фамилия:</label>
                                <input name="lastName" type="text" class="form-control" id="lastName" required>
                                <div class="invalid-feedback">
                                    Пожалуйста заполните фамилию
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstName">Имя:</label>
                                <input name="firstName" type="text" class="form-control" id="firstName" required>
                                <div class="invalid-feedback">
                                    Пожалуйста заполните имя
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dateOfBirth">Дата рождения:</label>
                                <input name="dateOfBirth" type="date" class="form-control" id="dateOfBirth" required>
                                <div class="invalid-feedback">
                                    Пожалуйста заполните дату рождения
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="text-center">
                                <img src="/1.svg" class="rounded" alt="Фото" width="200" height="200">
                            </div>
                            <div class="form-file form-file-lg col-md-6 mt-3">
                                <input type="file" class="form-file-input" id="customFileLg">
                            </div>
                        </div>

                    </div>
                    <div class="form-row">

                    </div>
                    <div class="form-group">
                        <label for="addInfo">Дополнительные сведения:</label>
                        <textarea name="addInfo" class="form-control" id="addInfo" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                    <div class="loader formStudentsLoader">
                        <img src="/Pulse.svg" alt="">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>