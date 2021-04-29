var dia
dia = prompt("Selecciona entre 0 y 6, para indicar el día: ")
dia = Number(dia)
switch (dia) {
    case 0:
        document.write(
            'El día que seleccionó es el - Domingo',
        );
        break;
    case 1:
        document.write(
            'El día que seleccionó es el - Lunes',
        );
        break;
    case 2:
        document.write(
            'El día que seleccionó es el - Martes',
        );
        break;
    case 3:
        document.write(
            'El día que seleccionó es el - Miercoles',
        );
        break;
    case 4:
        document.write(
            'El día que seleccionó es el - Jueves',
        );
        break;
    case 5:
        document.write(
            'El día que seleccionó es el - Viernes',
        );
        break;
    case 6:
        document.write(
            'El día que seleccionó es el - Sábado',
        );
        break;
    default:
        document.write("Número fuera de rango-<br>")

}