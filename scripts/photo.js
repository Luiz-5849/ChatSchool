function myFunction(){
    let imagem = document.getElementById('image');
    let pesquisa = document.getElementById('imgInput');
    imagem.addEventListener('click', () => {
        pesquisa.click();
    });
}
