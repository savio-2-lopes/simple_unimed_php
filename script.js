var valor = 0
var valor2 = 0
var tipo = ""
var nome = ""
var idade1 = 0
var tipo2 = ""

function onShow() {
    document.getElementById("boxOnShow").style.display = "table-row"
}

function onShowAll() {
    document.getElementById("boxIn3").style.display = "table-row"
    document.getElementById("nome2").value = nome
    document.getElementById("ident2").value = "ID: " + Math.floor(Math.random() * 1000000) + 1
    document.getElementById("valor2").value = valor
    document.getElementById("idade3").value = idade1
    document.getElementById("tipo2").value = tipo2
}

function onVanish() {
    tipo2 = document.getElementById("tipo").value
    idade1 = document.getElementById("idade").value
    document.getElementById("boxIn").style.display = "none"
    onShow()
}

function onDisplay() {
    document.getElementById("boxOnShow").style.display = "none"
    onShowAll()
}

function compare(idade, tipo) {
    if (idade <= 18 && idade >= 0) {
        if (tipo == "Enfermaria") {
            valor += 193
            return;
        } else {
            valor += 282
            return;
        }
    }

    if (idade <= 23 && idade >= 19) {
        if (tipo == "Enfermaria") {
            valor = valor + 221
            return
        }
        if (tipo == "Apartamento") {
            valor += 325
            return
        }
    }

    if (idade <= 28 && idade >= 24) {
        if (tipo == "Enfermaria") {
            valor += 255
            return
        }
        if (tipo == "Apartamento") {
            valor += 373
            return
        }
    }

    if (idade <= 38 && idade >= 29) {
        if (tipo == "Enfermaria") {
            valor += 337
            return
        }

        if (tipo == "Apartamento") {
            valor += 494
            return
        }
    }

    if (idade <= 53 && idade >= 39) {
        if (tipo == "Enfermaria") {
            valor += 616
            return
        }
        if (tipo == "Apartamento") {
            valor += 902
            return
        }
    }

    if (idade >= 54) {
        if (tipo == "Enfermaria") {
            valor += 800
            return
        }
        if (tipo == "Apartamento") {
            valor += 1200
            return
        }
    }
}

function calculate() {
    var idade = document.getElementById("idade").value
    tipo = document.getElementById("tipo").value
    nome = document.getElementById("nome").value
    compare(idade, tipo)
}

function dependente() {
    var n1 = document.getElementById("n1").value
    var n2 = document.getElementById("n2").value
    var n3 = document.getElementById("n3").value

    var depen = document.getElementById("b").value
    if (depen == 1) {
        compare(n1, tipo)
    }
    if (depen == 2) {
        compare(n1, tipo)
        compare(n2, tipo)
    }
    if (depen == 3) {
        compare(n1, tipo)
        compare(n2, tipo)
        compare(n3, tipo)
    }
    console.log(valor)
    return
}

function showIn() {
    var x = document.getElementById("b").value
    if (x == 1) {
        document.getElementById("n1").style.display = "table-row"
    }
    if (x == 2) {
        document.getElementById("n1").style.display = "table-row"
        document.getElementById("n2").style.display = "table-row"
    }
    if (x == 3) {
        document.getElementById("n1").style.display = "table-row"
        document.getElementById("n2").style.display = "table-row"
        document.getElementById("n3").style.display = "table-row"
    }
    if (x == 0) {
        document.getElementById("n1").style.display = "none"
        document.getElementById("n2").style.display = "none"
        document.getElementById("n3").style.display = "none"
    }
}
