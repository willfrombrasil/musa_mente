@component('mail::message')
# Olá {{ $user->name }},

Seu teste foi preenchido corretamente e processamos o resultado.

Segue o link para acessar o seu **Mapeamento das Deusas**.
 
@component('mail::button', ['url' => $user->link])
Acessar Resultado do Seu Teste
@endcomponent
 
Musa, é muito natural que acessemos mais o lado sombra (negativo) das Deusas porque não temos esses poderes equilibrados em nós e porque não sabemos usar nosso poder mental, vivemos no automático!

Por isso te pergunto, quer saber mais e aprender como usar esses poderes dentro de você e sua mente a seu favor e não mais contra?

@component('mail::button', ['url' => 'https://api.whatsapp.com/send?phone=5548991497040'])
Saiba Mais
@endcomponent

@endcomponent