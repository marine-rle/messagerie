@php
    $bdd = new PDO("mysql:host=localhost;dbname=messagerie;charset=utf8;","homestead", "secret");
$recupMessage = $bdd->query('SELECT * FROM contacts');
while ($message = $recupMessage->fetch()) {
    @endphp
    <div class="message">
        <p><strong>{{ $message['name'] }}</strong> :
        {{  $message['message'] }}</p>
    </div>
    @php
}
@endphp
