<label for="Nombre">Nombre</label>
    <input type="text" value="{{ $empleado->Nombre }}" name="Nombre" id="Nombre">
    <br>

    <label for="ApellidoPaterno">Apellido Paterno</label>
    <input type="text" value="{{ $empleado->ApellidoPaterno }}" name="ApellidoPaterno" id="ApellidoPaterno">
    <br>

    <label for="ApellidoMaterno">Apellido Materno</label>
    <input type="text" value="{{ $empleado->ApellidoMaterno }}" name="ApellidoMaterno" id="ApellidoMaterno">
    <br>

    <label for="Correo">Correo</label>
    <input type="text" name="Correo" id="Correo" value="{{ $empleado->Correo }}">
    <br>

    <label for="Foto">Foto</label>
    {{ $empleado->Foto }}
    <input type="file" name="Foto" id="Foto" value="{{ $empleado->Foto }}">
    <br>

    <input type="submit" value="Guardar Datos">