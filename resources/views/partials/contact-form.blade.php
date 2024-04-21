<section class="p-4 flex justify-center items-center">
    <div class="w-full min-h-60 bg-orange-500 rounded-xl shadow-xl p-4 flex justify-center items-center">
        <h4 class="text-white text-4xl font-semibold text-start w-1/2 pl-4 leading-relaxed"><span class="bg-white text-orange-500">Gostou de um imóvel?</span><br> Preencha o formulário.<br> <span class="bg-white text-orange-500">Vou entrar em contato</span><br> diretamente com você.</h4>
        <form method="post" action="{{ route('sendmail') }}" class="w-1/2">
                @csrf

                <input type="hidden" name="pagina" value="">
                <div class="mb-5">
                    <label for="Nome" class="block mb-2 text-sm font-medium text-white">Nome</label>
                    <input type="text" name="nome" placeholder="Nome" id="Nome" maxlength="30" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>

                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-white">Email</label>
                    <input type="email" name="email" placeholder="E-mail" id="email" maxlength="40" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>

                <div class="mb-5">
                    <label for="celular" class="block mb-2 text-sm font-medium text-white">Celular</label>
                    <input type="text" name="celular" placeholder="Celular" id="celular" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" maxlength="15" required>
                </div>

                <button type="submit" class="text-white hover:text-orange-500 bg-orange-500 hover:bg-white border transition-all border-white shadow-sm focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Enviar</button>	
        </form>
    </div>
</section>