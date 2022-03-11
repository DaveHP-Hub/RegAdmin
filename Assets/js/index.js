//DROPDOWN LIST DYNAMIC
//CREATE OPTIONS FOR INSTITUTIONS
function getInstitutions() {
    var select = document.getElementById("institution");
    const institutions = [
        "Secretaría de Gobernación",
        "Secretaría de Seguridad Pública",
        "Consejería Jurídica",
        "Secretaría de Desarrollo Rural",
        "Secretaría de Economía",
        "Secretaría de Trabajo",
        "Secretaría de Turismo",
        "Secretaría de Bienestar",
        "Secretaría de Salud  y SSEP",
        "Secretaría de Educación",
        "Secretaría de Cultura",
        "Sistema Estatal para el Desarrollo Integral de la Familia",
        "Secretaría de Administración",
        "Secretaría de la Función Pública",
        "Coordinación General de Comunicación y Agenda Digital",
        "Secretaría de Infraestructura",
        "Secretaría de Movilidad y Transporte",
        "Secretaría de Igualdad Sustantiva",
        "Instituto Poblano de los Pueblos Indígenas",
        "Secretaría de Medio Ambiente, Desarrollo Sustentable y Ordenamiento Territorial",
        "Instituto Superior de Atlixco",
        "Instituto Tecnológico Superior de Huauchinango",
        "Instituto Tecnológico Superior de la Sierra Norte de Puebla",
        "Sistema para el Desarrollo Integral de la Familia del Estado de Puebla (DIF)",
        "Universidad Tecnológica de Puebla",
        "Universidad Tecnológica de Tecamachalco",
        "Agencia Estatal de Energía de Puebla (AEEP)",
        "Banco Estatal de Tierra",
        "Carreteras de Cuota Puebla",
        "Ciudad Modelo",
        "Colegio de Bachilleres del Estado de Puebla",
        "Colegio de Educación Profesional Técnica del Estado de Puebla",
        "Colegio de Estudios Científicos y Tecnológicos del Estado de Puebla",
        "Comisión de Mejora Regulatoria del Estado de Puebla",
        "Comisión Ejecutiva Estatal de Atención a Víctimas del Estado de Puebla",
        "Comisión Estatal de Agua y Saneamiento del Estado de Puebla",
        "Comisión Estatal de Vivienda",
        "Consejo de Ciencia y Tecnología de Puebla (CONCYTEP)",
        "Centro de Conciliación Laboral del Estado de Puebla (CCLEP)",
        "Consejo Estatal de Coordinación del Sistema Nacional de Seguridad Pública",
        "Convenciones y Parques",
        "Coorporación Auxiliar de Policía de Protección Ciudadana",
        "Instituto de Capacitación para el Trabajo del Estado de Puebla (ICATEP)",
        "Instituto de Educación Digital del Estado de Puebla (IEDEP)",
        "Instituto de la Discapacidad del Estado de Puebla",
        "Instituto de Profesionalización del Magisterio Poblano",
        "Instituto de Seguridad y Servicios Sociales de los Trabajadores al Servicio de los Poderes del Estado de Puebla",
        "Instituto Estatal de Educacion para Adultos",
        "Instituto Poblano de Asistencia al Migrante",
        "Instituto Poblano de la Juventud",
        "Instituto Poblano de los Pueblos Indígenas",
        "Instituto Poblano del Deporte",
        "Instituto Tecnológico Superior Acatlán de Osorio",
        "Instituto Tecnológico Superior de Ciudad Serdán",
        "Instituto Tecnológico Superior de la Sierra Negra de Ajalpan",
        "Instituto Tecnológico Superior de Libres",
        "Instituto Tecnológico Superior de San Martín Texmelucan",
        "Instituto Tecnológico Superior de Tepeaca.",
        "Instituto Tecnológico Superior de Tepexi de Rodríguez",
        "Instituto Tecnológico Superior de Teziutlán.",
        "Instituto Tecnológico Superior de Tlatlauquitepec",
        "Instituto Tecnológico Superior de Venustiano Carranza",
        "Instituto Tecnológico Superior de Zacapoaxtla",
        "Museos Puebla",
        "Sistema Estatal de Telecomunicaciones",
        "Sistema para el Desarrollo Integral de la Familia del Estado de Puebla (DIF)",
        "Universidad Intercultural del Estado de Puebla",
        "Universidad Interserrana del Estado de Puebla - Ahuacatlan",
        "Universidad Interserrana del Estado de Puebla - Chilchotla",
        "Universidad Politécnica de Amozoc",
        "Universidad Politécnica de Puebla",
        "Universidad Politécnica Metropolitana de Puebla",
        "Universidad Tecnológica Bilingüe Internacional y Sustentable",
        "Universidad Tecnológica de Huejotzingo",
        "Universidad Tecnológica de Izúcar de Matamoros",
        "Universidad Tecnológica de Tehuacán",
        "Universidad Tecnológica de Xicotepec de Juárez",
        "Universidad Tecnológica de Oriental",
        "Universidad Tecnológica de la Salud",
    ];

    for (let i = 0; i <= institutions.length - 1; i++) {
        var options = institutions[i];
        var el = document.createElement("option");
        el.textContent = options;
        el.value = i + 1;
        select.appendChild(el);
    }
}

//CREATE OPTIONS FOR MUNICIPALITIES
function getMunicipalities() {
    var select = document.getElementById("municipality");
    const municipalities = [
        "Acajete",
        "Acateno",
        "Acatlán",
        "Acatzingo",
        "Acteopan",
        "Ahuacatlán",
        "Ahuatlán",
        "Ahuazotepec",
        "Ahuehuetitla",
        "Ajalpan",
        "Albino Zertuche",
        "Aljojuca",
        "Altepexi",
        "Amixtlán",
        "Amozoc",
        "Aquixtla",
        "Atempan",
        "Atexcal",
        "Atlixco",
        "Atoyatempan",
        "Atzala",
        "Atzitzihuacán",
        "Atzitzintla",
        "Axutla",
        "Ayotoxco de Guerrero",
        "Calpan",
        "Caltepec",
        "Camocuautla",
        "Caxhuacan",
        "Coatepec",
        "Coatzingo",
        "Cohetzala",
        "Cohuecan",
        "Coronango",
        "Coxcatlán",
        "Coyomeapan",
        "Coyotepec",
        "Cuapiaxtla de Madero",
        "Cuautempan",
        "Cuautinchán",
        "Cuautlancingo",
        "Cuayuca de Andrade",
        "Cuetzalan del Progreso",
        "Cuyoaco",
        "Chalchicomula de Sesma",
        "Chapulco",
        "Chiautla",
        "Chiautzingo",
        "Chiconcuautla",
        "Chichiquila",
        "Chietla",
        "Chigmecatitlán",
        "Chignahuapan",
        "Chignautla",
        "Chila",
        "Chila de la Sal",
        "Honey",
        "Chilchotla",
        "Chinantla",
        "Domingo Arenas",
        "Eloxochitlán",
        "Epatlán",
        "Esperanza",
        "Francisco Z. Mena",
        "General Felipe Ángeles",
        "Guadalupe",
        "Guadalupe Victoria",
        "Hermenegildo Galeana",
        "Huaquechula",
        "Huatlatlauca",
        "Huauchinango",
        "Huehuetla",
        "Huehuetlán el Chico",
        "Huejotzingo",
        "Hueyapan",
        "Hueytamalco",
        "Hueytlalpan",
        "Huitzilan de Serdán",
        "Huitziltepec",
        "Atlequizayan",
        "Ixcamilpa de Guerrero",
        "Ixcaquixtla",
        "Ixtacamaxtitlán",
        "Ixtepec",
        "Izúcar de Matamoros",
        "Jalpan",
        "Jolalpan",
        "Jonotla",
        "Jopala",
        "Juan C. Bonilla",
        "Juan Galindo",
        "Juan N. Méndez",
        "Lafragua",
        "Libres",
        "La Magdalena Tlatlauquitepec",
        "Mazapiltepec de Juárez",
        "Mixtla",
        "Molcaxac",
        "Cañada Morelos",
        "Naupan",
        "Nauzontla",
        "Nealtican",
        "Nicolás Bravo",
        "Nopalucan",
        "Ocotepec",
        "Ocoyucan",
        "Olintla",
        "Oriental",
        "Pahuatlán",
        "Palmar de Bravo",
        "Pantepec",
        "Petlalcingo",
        "Piaxtla",
        "Puebla",
        "Quecholac",
        "Quimixtlán",
        "Rafael Lara Grajales",
        "Los Reyes de Juárez",
        "San Andrés Cholula",
        "San Antonio Cañada",
        "San Diego la Mesa Tochimiltzingo",
        "San Felipe Teotlalcingo",
        "San Felipe Tepatlán",
        "San Gabriel Chilac",
        "San Gregorio Atzompa",
        "San Jerónimo Tecuanipan",
        "San Jerónimo Xayacatlán",
        "San José Chiapa",
        "San José Miahuatlán",
        "San Juan Atenco",
        "San Juan Atzompa",
        "San Martín Texmelucan",
        "San Martín Totoltepec",
        "San Matías Tlalancaleca",
        "San Miguel Ixitlán",
        "San Miguel Xoxtla",
        "San Nicolás Buenos Aires",
        "San Nicolás de los Ranchos",
        "San Pablo Anicano",
        "San Pedro Cholula",
        "San Pedro Yeloixtlahuaca",
        "San Salvador el Seco",
        "San Salvador el Verde",
        "San Salvador Huixcolotla",
        "San Sebastián Tlacotepec",
        "Santa Catarina Tlaltempan",
        "Santa Inés Ahuatempan",
        "Santa Isabel Cholula",
        "Santiago Miahuatlán",
        "Huehuetlán el Grande",
        "Santo Tomás Hueyotlipan",
        "Soltepec",
        "Tecali de Herrera",
        "Tecamachalco",
        "Tecomatlán",
        "Tehuacán",
        "Tehuitzingo",
        "Tenampulco",
        "Teopantlán",
        "Teotlalco",
        "Tepanco de López",
        "Tepango de Rodríguez",
        "Tepatlaxco de Hidalgo",
        "Tepeaca",
        "Tepemaxalco",
        "Tepeojuma",
        "Tepetzintla",
        "Tepexco",
        "Tepexi de Rodríguez",
        "Tepeyahualco",
        "Tepeyahualco de Cuauhtémoc",
        "Tetela de Ocampo",
        "Teteles de Avila Castillo",
        "Teziutlán",
        "Tianguismanalco",
        "Tilapa",
        "Tlacotepec de Benito Juárez",
        "Tlacuilotepec",
        "Tlachichuca",
        "Tlahuapan",
        "Tlaltenango",
        "Tlanepantla",
        "Tlaola",
        "Tlapacoya",
        "Tlapanalá",
        "Tlatlauquitepec",
        "Tlaxco",
        "Tochimilco",
        "Tochtepec",
        "Totoltepec de Guerrero",
        "Tulcingo",
        "Tuzamapan de Galeana",
        "Tzicatlacoyan",
        "Venustiano Carranza",
        "Vicente Guerrero",
        "Xayacatlán de Bravo",
        "Xicotepec",
        "Xicotlán",
        "Xiutetelco",
        "Xochiapulco",
        "Xochiltepec",
        "Xochitlán de Vicente Suárez",
        "Xochitlán Todos Santos",
        "Yaonáhuac",
        "Yehualtepec",
        "Zacapala",
        "Zacapoaxtla",
        "Zacatlán",
        "Zapotitlán",
        "Zapotitlán de Méndez",
        "Zaragoza",
        "Zautla",
        "Zihuateutla",
        "Zinacatepec",
        "Zongozotla",
        "Zoquiapan",
        "Zoquitlán",
    ];

    for (let i = 0; i <= municipalities.length - 1; i++) {
        var options = municipalities[i];
        var element = document.createElement("option");
        element.textContent = options;
        element.value = i + 1;
        select.appendChild(element);
    }
}


//CREATE OPTIONS FOR APPOINTMENT
function getAppointment() {
    var select = document.getElementById("appointment");
    const appointment = [
        "Secretario (a) u homologo",
        "Titular de área u homologo",
        "Director (a) u homologo",
        "Subdirector (a) u homologo",
        "Jefe (a) de departamento u homologo",
        "Analista u homologo",
        "Otro"
    ];

    for (let i = 0; i <= appointment.length - 1; i++) {
        var options = appointment[i];
        var element = document.createElement("option");
        element.textContent = options;
        element.value = i + 1;
        select.appendChild(element);
    }
}


getAppointment();

document.getElementById("answer01").onchange = function(answer01) {
    answer01 = this.value;
    if (answer01 === "Estatal") {
        document.getElementById("institutions").style.display = "block";
        document.getElementById("municipalities").style.display = "none";
        getInstitutions();
    } else {
        document.getElementById("municipalities").style.display = "block";
        document.getElementById("institutions").style.display = "none";
        getMunicipalities();
    }

    console.log(answer01);
};

document.getElementById("appointment").onchange = function(puesto) {
    appointment = this.value;
    if (appointment === "7") {
        document.getElementById("other_appointment").style.display = "block";
        document.getElementById("cnne").className = "col-sm-3";
        setRequired(true);
    

    } else {
        document.getElementById("other_appointment").style.display = "none";
        document.getElementById("cnne").className = "col-sm-6";
        setRequired(false);
    }
    console.log(appointment);
};


function setRequired(val){
    input = document.getElementById("appointment_other").getElementsByTagName('input');
    for(i = 0; i < input.length; i++){
        input[i].required = val;
    }
}

document.getElementById("appointment_other").onchange = function(appointment_other) {
    appointment_other = this.value;
    
    console.log(appointment_other);
};


