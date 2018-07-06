    <div class="well exam">
        <div class="container">
            <div class="row exam-row justify-content-center">

            </div>
        </div>
    </div>
<div class="well form">
    <div class="container">
        <div class="row justify-content-center form-row">
            <div class="col-md-12">
            <div class="form">
                <form class="" action="page?=data" method="GET">
                    <div class="opleiding" id="opleiding">
                        <div class="col-md-12">
                        <h2>INLICHTINGENFORMULIER schooljaar 2018-2019</h2>
                            <p>In te vullen door Decaan / Mentor </p>
                            <p>GRAAG VOLLEDIG INVULLEN</p>
                            <hr>
                        <div class="form-group">
                            <label for="naam">Naam leerling</label>
                            <input class="form-element" type="text" name="naam" value="" placeholder="Bijv: Jan de Boer" required>
                        </div>
                        <div class="form-group">
                            <label for="date">Geboortedatum</label>
                            <input class="form-element" type="date" name="date" value="" placeholder="Geboortedatum" required>
                        </div>
                        <div class="form-group">
                            <label for="opleiding">Opleidingsniveau</label>
                            <select class="form-element" name="opleiding" id="options" required>
                                <option value="--" selected disabled>--</option>
                                <option value="vmbo">VMBO</option>
                                <option value="havo">HAVO</option>
                                <option value="mbo">MBO</option>
                                <option value="anders">Anders</option>
                            </select>
                        </div>
                        <div class="form-group vmbo-niv content hidden" id="content-vmbo">
                            <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6">
                            <label for="">BB</label>
                            <input type="radio" name="niveau" value="BB" >
                            </div>
                            <div class="col-lg-4 col-md-6">
                            <label for="">KB</label>
                            <input type="radio" name="niveau" value="KB" >
                            </div>
                            <div class="col-lg-4 col-md-6">
                            <label for="">GL</label>
                            <input type="radio" name="niveau" value="GL" >
                            </div>
                            <div class="col-lg-4 col-md-6">
                            <label for="">TL</label>
                            <input type="radio" name="niveau" value="TL" >
                            </div>
                            <div class="col-lg-4 col-md-6">
                            <label for="">LWT</label>
                            <input type="radio" name="niveau" value="LWT">
                            </div>
                            <div class="col-lg-4 col-md-6">
                            <label for="">+LWOO</label>
                            <input type="radio" name="niveau" value="+LWOO">
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <label for="opleiding">Sector</label>
                                    <select class="form-element" name="opleiding">
                                        <option value="">Economie</option>
                                        <option value="">Landbouw</option>
                                        <option value="">Techniek</option>
                                        <option value="">Zorg & welzijn</option>
                                    </select>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Heeft de leerling een keuzevak MVI gedaan?</label>
                                        <input type="radio" name="mvi" value="">
                                        <label for="mvi">Ja</label>
                                        <input type="radio" name="mvi" value="">
                                        <label for="mvi">Nee</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="">zo ja welke</label>
                                        <input class="form-element" type="text" name="" value="" placeholder="MVI keuzevak">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Diploma behaald / te behalen op:</label>
                                        <input class="form-element" type="date" name="" value="" placeholder="Bijv: 20 juli 02017">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group havo-niv content hidden" id="content-havo">
                            <div class="form-group">
                                    <label for="">Diploma behaald / te behalen op:</label>
                                    <input class="form-element" type="date" name="" value="" placeholder="Bijv: 20 juli 02017">
                            </div>
                            <div class="form-group">
                                <label for="">Overgangsbewijs van leerjaar</label>
                                <input class="form-element" type="number" name="" value=""  placeholder="Bijv: 3">
                            </div>
                            <div class="form-group">
                                <label for="">naar leerjaar</label>
                                <input  class="form-element"type="number" name="" value="" placeholder="Bijv: 4">
                            </div>
                        </div>
                        <div class="form-group mbo-niv content hidden" id="content-mbo">
                            <p for="">Opleidingsniveau</p>
                            <div class="form-group">
                                <input type="radio" name="opleiding" value="">
                                <label for="opleiding">1</label>
                                <input type="radio" name="opleiding" value="">
                                <label for="opleiding">2</label>
                                <input type="radio" name="opleiding" value="">
                                <label for="opleiding">3</label>
                                <input type="radio" name="opleiding" value="">
                                <label for="opleiding">4</label>
                            </div>
                            <div class="form-group">
                                <p>leerweg</p>
                                <select class="form-element" name="leerweg">
                                    <option value="" disabled selected>--</option>
                                    <option value="">BBL</option>
                                    <option value="">BOL</option>
                                </select>
                            </div>
                            <div class="form-group">
                                    <label for="">Diploma behaald / te behalen op:</label>
                                    <input id="filled" class="form-element" type="date" name="" value="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="eigenschappen filled" id="next-eig">
                    <div class="row justify-content-center">
                    <div class="col-md-12">
                    <h3 class="text-center mb-50">Hoe is uw indruk op school over de leerling</h3>
                        <h3>Werkhouding</h3>
                            <div class="row budget">
                                <p>Concentratie</p>
                                <div class="col-md-3 form-group">
                                    <input type="radio" id="option1" name="Concentratie">
                                    <label for="option1"> <span></span> Goed</label>
                                </div>
                                <div class="col-md-3 form-group">
                                    <input type="radio" id="option2" name="Concentratie">
                                    <label for="option2"> <span></span> Voldoende</label>
                                </div>
                                <div class="col-md-3 form-group">
                                    <input type="radio" id="option3" name="Concentratie">
                                    <label for="option3"> <span></span> Zwak</label>
                                </div>
                                <div class="col-md-3 form-group">
                                    <input type="radio" id="option4" name="Concentratie">
                                    <label for="option4"> <span></span> Onvoldoende</label>
                                </div>
                            </div>
                            <div class="row budget">
                                <p>Werktempo</p>
                                <div class="col-md-3 form-group">
                                    <input type="radio" id="option5" name="tempo">
                                    <label for="option5"> <span></span> Goed</label>
                                </div>
                                <div class="col-md-3 form-group">
                                    <input type="radio" id="option6" name="tempo">
                                    <label for="option6"> <span></span> Voldoende</label>
                                </div>
                                <div class="col-md-3 form-group">
                                    <input type="radio" id="option7" name="tempo">
                                    <label for="option7"> <span></span> Zwak</label>
                                </div>
                                <div class="col-md-3 form-group">
                                    <input type="radio" id="option8" name="tempo">
                                    <label for="option8"> <span></span> Onvoldoende</label>
                                </div>
                            </div>
                        <div class="row budget">
                            <p>Zelfstandigwerken in de klas</p>
                            <div class="col-md-3 form-group">
                                <input type="radio" id="option9" name="werken">
                                <label for="option9"> <span></span> Goed</label>
                            </div>
                            <div class="col-md-3 form-group">
                                <input type="radio" id="option10" name="werken">
                                <label for="option10"> <span></span> Voldoende</label>
                            </div>
                            <div class="col-md-3 form-group">
                                <input type="radio" id="option11" name="werken">
                                <label for="option11"> <span></span> Zwak</label>
                            </div>
                            <div class="col-md-3 form-group">
                                <input type="radio" id="option12" name="werken">
                                <label for="option12"> <span></span> Onvoldoende</label>
                            </div>
                        </div>
                        <h3>Instelling</h3>
                        <div class="row budget">
                            <p>Motivatie</p>
                            <div class="col-md-3 form-group">
                                <input type="radio" id="option13" name="Motivatie">
                                <label for="option13"> <span></span> Goed</label>
                            </div>
                            <div class="col-md-3 form-group">
                                <input type="radio" id="option14" name="Motivatie">
                                <label for="option14"> <span></span> Voldoende</label>
                            </div>
                            <div class="col-md-3 form-group">
                                <input type="radio" id="option15" name="Motivatie">
                                <label for="option15"> <span></span> Zwak</label>
                            </div>
                            <div class="col-md-3 form-group">
                                <input type="radio" id="option16" name="Motivatie">
                                <label for="option16"> <span></span> Onvoldoende</label>
                            </div>
                        </div>
                        <div class="row budget">
                            <p>Doorzettingsvermogen</p>
                            <div class="col-md-3 form-group">
                                <input type="radio" id="option17" name="vermogen">
                                <label for="option17"> <span></span> Goed</label>
                            </div>
                            <div class="col-md-3 form-group">
                                <input type="radio" id="option18" name="vermogen">
                                <label for="option18"> <span></span> Voldoende</label>
                            </div>
                            <div class="col-md-3 form-group">
                                <input type="radio" id="option19" name="vermogen">
                                <label for="option19"> <span></span> Zwak</label>
                            </div>
                            <div class="col-md-3 form-group">
                                <input type="radio" id="option20" name="vermogen">
                                <label for="option20"> <span></span> Onvoldoende</label>
                            </div>
                        </div>
                        <h3>Vaardigheden</h3>
                        <div class="row budget">
                            <p>Communicatieve</p>
                            <div class="col-md-3 form-group">
                                <input type="radio" id="option21" name="Communicatieve">
                                <label for="option21"> <span></span> Goed</label>
                            </div>
                            <div class="col-md-3 form-group">
                                <input type="radio" id="option22" name="Communicatieve">
                                <label for="option22"> <span></span> Voldoende</label>
                            </div>
                            <div class="col-md-3 form-group">
                                <input type="radio" id="option23" name="Communicatieve">
                                <label for="option23"> <span></span> Zwak</label>
                            </div>
                            <div class="col-md-3 form-group">
                                <input type="radio" id="option24" name="Communicatieve">
                                <label for="option24"> <span></span> Onvoldoende</label>
                            </div>
                        </div>
                        <div class="row budget">
                            <p>vaardigheden</p>
                            <div class="col-md-3 form-group">
                                <input type="radio" id="option25" name="vaardigheden">
                                <label for="option25"> <span></span> Goed</label>
                            </div>
                            <div class="col-md-3 form-group">
                                <input type="radio" id="option26" name="vaardigheden">
                                <label for="option26"> <span></span> Voldoende</label>
                            </div>
                            <div class="col-md-3 form-group">
                                <input type="radio" id="option27" name="vaardigheden">
                                <label for="option27"> <span></span> Zwak</label>
                            </div>
                            <div class="col-md-3 form-group">
                                <input type="radio" id="option28" name="vaardigheden">
                                <label for="option28"> <span></span> Onvoldoende</label>
                            </div>
                        </div>
                        <div class="row budget">
                            <p>Sociale vaardigheden</p>
                            <div class="col-md-3 form-group">
                                <input type="radio" id="option29" name="sociaal">
                                <label for="option29"> <span></span> Goed</label>
                            </div>
                            <div class="col-md-3 form-group">
                                <input type="radio" id="option30" name="sociaal">
                                <label for="option30"> <span></span> Voldoende</label>
                            </div>
                            <div class="col-md-3 form-group">
                                <input type="radio" id="option31" name="sociaal">
                                <label for="option31"> <span></span> Zwak</label>
                            </div>
                            <div class="col-md-3 form-group">
                                <input type="radio" id="option32" name="sociaal">
                                <label for="option32"> <span></span> Onvoldoende</label>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="bijzonderheden" id="bijzonderheden">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center mb-50">Bijzonderheden</h3>
                    <div class="form-group">
                    <p>Heeft de leerling een aandoening en/of beperking die van invloed op de studie is of kan zijn?</p>
                        <input class="form-element" type="text" name="aandoening" value="" placeholder="Ja/Nee">
                    </div>
                    <div class="form-group">
                    <p>Volgt de leerling speciaal onderwijs?</p>
                    <input class="form-element" type="text" name="speciaal" value="" placeholder="Ja/Nee">
                    </div>
                    <div class="form-group">
                    <p>Heeft de leerling dyslexie?</p>
                    <input class="form-element" type="text" name="dyslexie" value="" placeholder="Ja/Nee">
                    </div>
                    <div class="form-group">
                    <p>Heeft de leerling dyscalculie?</p>
                    <input class="form-element" type="text" name="dyscalculie" value="" placeholder="Ja/Nee">
                    </div>
                    <div class="form-group">
                    <p>Is de leerling recent besproken in het extern zorg- en adviesteam (ZAT)?</p>
                    <input class="form-element" type="text" name="zat" value="" placeholder="Ja/Nee">
                    </div>
                    <div class="form-group">
                    <p>Ontvangt de leerling nog andere zorg?</p>
                    <input class="form-element" type="text" name="dyscalculie" value="" placeholder="Ja/Nee">
                    </div>
                    <div class="form-group">
                    <p>Zoja, welke zorg?</p>
                    <input class="form-element" type="text" name="dyscalculie" value="" placeholder="Zorg">
                    </div>
                    <div class="form-group">
                    <p>Zijn er andere bijzondere persoonlijk omstandigheden waarvan de school op de hoogte moet zijn?</p>
                    <input class="form-element" type="text" name="dyscalculie" value="" placeholder="Ja/Nee">
                    </div>
                </div>
            </div>
        </div>
        <div class="gegevens" id="gegevens">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <h3>Uw gegevens</h3>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="decaan-name">Uw naam</label>
                        <input class="form-element" type="text" name="decaan-name" value="" placeholder="Naam">
                    </div>
                    <div class="form-group">
                        <label for="functie">Functie</label>
                        <input class="form-element" type="text" name="functie" value="" placeholder="Functie">
                    </div>
                    <div class="form-group">
                        <label for="school">Naam school</label>
                        <input class="form-element" type="text" name="school" value="" placeholder="School">
                    </div>
                    <div class="form-group">
                        <label for="telefoon">Telefoon nummer</label>
                        <input class="form-element" type="text" name="telefoon" value="" placeholder="Telefoon">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="gender" style="display: block;">Geslacht</label>
                        <input class="" type="radio" name="gender" value="">
                        <label for="">Man</label>
                        <input class="" type="radio" name="gender" value="">
                        <label for="">Vrouw</label>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-element" type="email" name="email" value="" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <label for="plaats">Plaats</label>
                        <input class="form-element" type="text" name="plaats" value="" placeholder="Plaats">
                    </div>
                    <div class="form-group">
                        <label for="contact">Telefonisch contact gewenst</label>
                        <input class="form-element" type="text" name="contact" value="" placeholder="Ja/nee">
                    </div>
                    <div class="form-group">
                        <button class="btn exam-btn" type="submit">laatste stap</button>
                    </div>
                </div>
            </div>
            </div>
        </div>

            </form>
        </div>
    </div>
</div>
    </div>
</div>
