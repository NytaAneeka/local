<h3>Kuno mases indeksas (KMI) skaiciuokle</h3>
<br>
<p>KMI - tai ugio ir svorio santykio rodiklis, leidziantis nurodyti ar zmogaus svoris normalus ar yra antsvoris ar nutukimas.</p>
<p>Noredami apskaiciuoti savo KMI iveskite savo duomenis:</p>
<br>

<form method="POST" action="{{route('kmi_post')}}">

    @csrf
    <label for="svoris"> Svoris (kg): <br></label>
    <input type="text" name="svoris" id="svoris">
    <br>


    <label for="ugis"> Ugis (cm):<br></label>
    <input type="text" name="ugis" id="ugis">
    <br>

    <input type="submit" value="Skaiciuoti">

</form>

@if(isset($kmi))

    <p>Jusu kmi: {{$kmi}}</p>

@endif