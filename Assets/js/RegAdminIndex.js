function ComboYear(){
    var d = new Date();
    var n = d.getFullYear();
    var select = document.getElementById("yearRA");
    for(var i = n; i >= 1970; i--) {
        var opc = document.createElement("option");
        opc.text = i;
        opc.value = i;
        select.add(opc)
    }
}


ComboYear();


document.getElementById("basisJA").onchange = function(basisJA) {
    basisJA = this.value;
    if (basisJA === "1") {
       
        document.getElementById("answerB").style.display = "table-cell";
        
    } else {
        document.getElementById("answerB").style.display = "none";
        document.getElementById("bAnswer").value = "";
    }
    console.log(basisJA);

}; 



document.getElementById("bAnswer").onchange = function(bAnswer) {
    answerB = this.value;
    console.log(answerB);
};



document.getElementById("entryRA").onchange = function(entryRA) {
    entryRA = this.value;
    if (entryRA === "53") {
        
        document.getElementById("other_entry").style.display = "table-cell";

    } else {
        document.getElementById("other_entry").style.display = "none";
       
        document.getElementById("entry_other").value = "";

    }
    console.log(entryRA);
};

document.getElementById("entry_other").onchange = function(entry_other) {
    entry_other= this.value;
    console.log(entry_other);
    
}



document.getElementById("unitRA").onchange = function(unitRA) {
    unitRA = this.value;
    if (unitRA === "12") {
        document.getElementById("other_unit").style.display = "table-cell";
       

    } else {
        document.getElementById("other_unit").style.display = "none";
        document.getElementById("unit_other").value = "";

    }
};


document.getElementById("unit_other").onchange = function(unit_other) {
    unit_other = this.value;
    console.log(unit_other);
}


document.getElementById("answer16").onchange = function(answer16) {
    answer16 = this.value;
    if (answer16 === "9") {
        document.getElementById("other_16").style.display = "table-cell";
    } else {
        document.getElementById("other_16").style.display = "none";
    }
};

document.getElementById("regRA").onchange = function(regRA) {
    regRA = this.value;
    if (regRA === "1") {
        document.getElementById("answers16").style.display = "table-row";
        
    } else {
        document.getElementById("answers16").style.display = "none";
        document.getElementById("answer16").value = "";
        document.getElementById("16_other").value ="";

    }
    console.log(regRA);
};

document.getElementById("answer16").onchange = function(answer16) {
    answer16 = this.value;
    if (answer16 === "9") {
        document.getElementById("other_16").style.display = "block";
    } else {
        document.getElementById("other_16").style.display = "none";
        document.getElementById("16_other").value ="";

    }
    console.log(answer16);
};

document.getElementById("16_other").onchange = function(other) {
other = this.value;
console.log(other);
}


$(document).ready(function() {
    $('.multi-select').selectpicker();
});




document.getElementById("periodRA").onchange = function(periodRA) {
    periodRA = this.value;
    if (periodRA === "8") {
        document.getElementById("other_per").style.display = "table-cell";
        
    } else {
        document.getElementById("other_per").style.display = "none";
        document.getElementById("per_ot").value = "";
    }
    console.log(periodRA);
};

document.getElementById("per_ot").onchange = function(per_ot) {
    per_ot = this.value;
    console.log(per_ot);
    
};

document.getElementById("refRA").onchange = function(refRA) {
    refRA = this.value;
    if (refRA === "0") {
        document.getElementById("refanswer").style.display = "table-cell";
        
    } else {
        document.getElementById("refanswer").style.display = "none";
        document.getElementById("refTemp").value = "";
    }
    console.log(refRA);
};


document.getElementById("refTemp").onchange = function(refTemp) {
    refTemp = this.value;
    console.log(refTemp);
}

document.getElementById("infoRA").onchange = function(infoRA) {
    infoRA = this.value;
    if (infoRA === "0") {
        document.getElementById("infoAnswer").style.display = "table-cell";
        
    } else {
        document.getElementById("infoAnswer").style.display = "none";
        document.getElementById("answerInfo").value = "";
    }
    console.log(infoRA);
};


document.getElementById("answerInfo").onchange = function(answerInfo) {
    answerInfo = this.value;
    if(answerInfo!= null) {
        document.getElementById("sendData").style.display = "inline-block";
    }
}

document.getElementById("medRA").onchange = function(medRA) {
    medRA = this.value;
    if (medRA === "Medio Electrónico" || medRA === "Medio Físico") {
        document.getElementById("medAnswer").style.display = "table-cell";
        document.getElementById("answerMed").value = "";
    } else {
        document.getElementById("medAnswer").style.display = "none";
        document.getElementById("answerMed").value ="";
    }
    console.log(medRA);
};

document.getElementById("answerMed").onchange = function(answerMed) {
    answerMed = this.value;
    console.log(answerMed);
};

document.getElementById("metRA").onchange = function(metRA) {
    metRA = this.value;
    if (metRA === "1") {
        document.getElementById("metAnswer").style.display = "table-cell";
    } else {
        document.getElementById("metAnswer").style.display = "none";
        document.getElementById("answerMet").value = "";
    }
    console.log(metRA);
};

document.getElementById("answerMet").onchange = function(answerMet) {
    answerMet = this.value;
    console.log(answerMet);

};

document.getElementById("publiRA").onchange = function(publiRA) {
    publiRA = this.value;
    if (publiRA === "1") {
        document.getElementById("publiAnswer").style.display = "table-cell";
        document.querySelector("#rec_").innerText = "19.1. ¿En que portales se publica?";
        document.getElementById("answerPubli").placeholder = "Especifique en qué portales se publica la inf.";
        document.getElementById("answerPubli").value="";

    } else {

        document.getElementById("publiAnswer").style.display = "table-cell";
        document.querySelector("#rec_").innerText = "19.1. ¿Por qué?";
        document.getElementById("answerPubli").placeholder = "Especifique por qué no se publica la inf.";
        document.getElementById("answerPubli").value="";

    }
    console.log(publiRA);
};


document.getElementById("answerPubli").onchange = function(answerPubli) {
    answerPubli = this.value;
    console.log(answerPubli);
}

document.getElementById("inRA").onchange = function(inRA) {
    inRA = this.value;
    if (inRA === "1") {
        document.getElementById("inAnswer").style.display = "table-cell";
        document.getElementById("IdAnswer").style.display = "table-row";
        
    } else {
        document.getElementById("inAnswer").style.display = "none";
        document.getElementById("IdAnswer").style.display = "none";
        document.getElementById("answerIn").value = "";
        document.getElementById("answerId").value ="";
    }
    console.log(inRA);
};


/*
document.getElementById("answerIn").onchange = function(answerIn) {
    answerIn = this.value;
    if(answerIn != null) {
        document.getElementById("answerId").onchange = function(answerId) {
            answerId = this.value;
            if(answerId != null) {
                document.getElementById("sendData").style.display = "inline-block";
            }
        }
    }
}
*/




document.getElementById("instiRA").onchange = function(instiRA) {
    instiRA = this.value;
    if (instiRA === "1") {
        document.getElementById("instiAnswer").style.display = "table-cell";
        document.querySelector("#rec").innerText = "22.1. ¿Para qué?";
        document.getElementById("answerinsti").placeholder = "Especifique cuál";
        document.getElementById("answerinsti").value ="";

    } else {
        document.getElementById("instiAnswer").style.display = "table-cell";
        document.querySelector("#rec").innerText = "22.1. ¿Por qué?";
        document.getElementById("answerinsti").placeholder = "Especifique por qué no";
        document.getElementById("answerinsti").value ="";
    }
    console.log(instiRA);
};


document.getElementById("answerinsti").onchange = function(answerinsti) {
    answerinsti = this.value;
    console.log(answerinsti);
}

document.getElementById("softRA").onchange = function(softRA) {
    softRA = this.value;
    if (softRA === "1") {
        document.getElementById("softAnswer").style.display = "table-cell";
    } else {
        document.getElementById("softAnswer").style.display = "none";
        document.getElementById("answersoft").value = "";
    }
    console.log(softRA);
};


document.getElementById("answersoft").onchange = function(answersoft) {
    answersoft = this.value;
    console.log(answersoft);
}


document.getElementById("formatRA").onchange = function(formatRA) {
    formatRA = this.value;
    if (formatRA === "7") {
        document.getElementById("other_format").style.display = "table-cell";
    } else {
        document.getElementById("other_format").style.display = "none";
        document.getElementById("format_ot").value = "";
    }
    console.log(formatRA);

};



document.getElementById("format_ot").onchange = function(format_ot) {
    format_ot = this.value;
    if(format_ot != null) {
        document.getElementById("sendData").style.display = "inline-block";
    }
}

document.getElementById("analyRA").onchange = function(analyRA) {
    analyRA = this.value;
    if (analyRA === "0") {
        document.getElementById("negative1").style.display = "none";
        document.getElementById("negative2").style.display = "none";
        document.getElementById("negative3").style.display = "none";
        document.getElementById("negative4").style.display = "none";
        document.getElementById("negative5").style.display = "none";
        document.getElementById("negative6").style.display = "none";
        document.getElementById("negative7").style.display = "none";
        document.getElementById("negative8").style.display = "none";

        document.getElementById("periodARA").value ="";
        document.getElementById("perA_ot").value = "";
        document.getElementById("publiARA").value = "";
        document.getElementById("answerPubliA").value ="";
        document.getElementById("analyType").value ="";
        document.getElementById("obtAnaly").value ="";
        document.getElementById("impRA").value ="";
        document.getElementById("otImp").value ="";
        document.getElementById("needsRA").value ="";
        document.getElementById("needIRA").value ="";
        document.getElementById("contrRA").value ="";


    } else if (analyRA === "1") {
        document.getElementById("negative1").style.display = "table-row";
        document.getElementById("negative2").style.display = "table-row";
        document.getElementById("negative3").style.display = "table-row";
        document.getElementById("negative4").style.display = "table-row";
        document.getElementById("negative5").style.display = "table-row";
        document.getElementById("negative6").style.display = "table-row";
        document.getElementById("negative7").style.display = "table-row";
        document.getElementById("negative8").style.display = "table-row";
    }

    console.log(analyRA);
};

document.getElementById("periodARA").onchange = function(periodARA) {
    periodARA = this.value;
    if (periodARA === "8") {
        document.getElementById("other_perA").style.display = "table-cell";
        
    } else {
        document.getElementById("other_perA").style.display = "none";
        document.getElementById("perA_ot").value ="";
    }
    console.log(periodARA);
};

document.getElementById("perA_ot").onchange = function(perA_ot) {
    perA_ot = this.value;
    console.log(perA_ot);
};





document.getElementById("publiARA").onchange = function(publiARA) {
    publiARA = this.value;
    if (publiARA === "1") {
        document.getElementById("publiAnswerA").style.display = "table-cell";
        document.querySelector("#port").innerText = "30.1. ¿En que portales se publica?";
        document.getElementById("answerPubliA").placeholder = "Especifique en qué portal se publica la inf.";
        document.getElementById("answerPubliA").value ="";

    } else {
        document.getElementById("publiAnswerA").style.display = "table-cell";
        document.querySelector("#port").innerText = "30.1. ¿Por qué?";
        document.getElementById("answerPubliA").placeholder = "Especifique por qué no se publica la inf.";
        document.getElementById("answerPubliA").value ="";

    }
    console.log(publiARA);
};

document.getElementById("answerPubliA").onchange = function(answerPubliA) {
    answerPubliA = this.value;
    console.log(answerPubliA);
}








var myLevels = [];
$('#levelRA').on('changed.bs.select', function(e, clickedIndex, isSelected, previousValue) {
    var selectedLev = document.getElementById("levelRA").options[clickedIndex].value;
    if (myLevels.indexOf(selectedLev) == -1) {
        myLevels.push(selectedLev);


    } else {
        myLevels.splice(myLevels.indexOf(selectedLev), 1);

    }
});

document.getElementById("levelRA").onchange = function(levelRA) {
    selected = $('#levelRA').val();
    if (selected.includes("6")) {
        document.getElementById("other_lev").style.display = "table-cell";

    } else {

        document.getElementById("other_lev").style.display = "none";
        document.getElementById("16_lev").value = "";

    }

};


document.getElementById("impRA").onchange = function(impRA) {
    selected = $('#impRA').val();
    if (selected.includes("8")) {
        document.getElementById("impOt").style.display = "table-cell";

    } else {

        document.getElementById("impOt").style.display = "none";
        document.getElementById("otImp").value = "";

    }

};

document.getElementById("16_lev").onchange = function(lev) {
    lev = this.value;
    console.log(lev);

}

const campoNumerico = document.getElementById('yearRA');

campoNumerico.addEventListener('keydown', function(evento) {
  const teclaPresionada = evento.key;
  const teclaPresionadaEsUnNumero =
    Number.isInteger(parseInt(teclaPresionada));

  const sePresionoUnaTeclaNoAdmitida = 
    teclaPresionada != 'ArrowDown' &&
    teclaPresionada != 'ArrowUp' &&
    teclaPresionada != 'ArrowLeft' &&
    teclaPresionada != 'ArrowRight' &&
    teclaPresionada != 'Backspace' &&
    teclaPresionada != 'Delete' &&
    teclaPresionada != 'Enter' &&
    !teclaPresionadaEsUnNumero;
  const comienzaPorCero = 
    campoNumerico.value.length === 0 &&
    teclaPresionada == 0;

  if (sePresionoUnaTeclaNoAdmitida || comienzaPorCero) {
    evento.preventDefault(); 
  }

});