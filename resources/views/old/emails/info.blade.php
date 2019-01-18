@component('mail::message')
# Olá, {{ $inscrito->nome }}

Você se inscreveu recentemente como {{ kebab_case($inscrito->inscricao) }} no VIII
Congresso Sinodal das Sociedades Internas do Sínodo Sul da Bahia.

A taxa do congresso é de R$ 190,00 e deverá ser depositada ou transferida na conta abaixo.

@component('mail::panel')
- <b>Banco do Brasil</b>
- <b>Agência:</b> 1029-4
- <b>Conta-Corrente:</b> 18238-9
- <b>Favorecido:</b> Sínodo Sul da Bahia
@endcomponent

É sugerido que o pagamento seja realizado em quatro parcelas nos meses de fevereiro
a maio (3x de R$ 50,00 e 1x de R$ 40,00).


Em Cristo,<br>
Sínodo Sul da Bahia
@endcomponent
