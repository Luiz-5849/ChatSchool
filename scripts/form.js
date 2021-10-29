export class FormPost {
    constructor(idForm, idTextarea, iddivPost){
        this.form = document.getElementById(idForm);
        this.textarea = document.getElementById(idTextarea);
        this.divPost = document.getElementById(iddivPost);
        this.addSubmit();
    }

    onSubmit(func){
        this.form.addEventListener('submit',func)
    }

        formValidate(value){
            if(value === '' || value === null || value === undefined || value.length < 2 ){
                return false
            }
                return true
        }

        getTime(){
            const time = new Date();
            const hour = time.getHours();
            const minutes = time.getMinutes();
            return `${hour}h ${minutes}min`        
        }

        addSubmit(){
            const handleSubmit = (event) => {
                event.preventDefault();
                if(this.formValidate(this.textarea.value)){
                const time = this.getTime();
                const newPost = document.createElement('div');
                newPost.classList.add('post');
                newPost.innerHTML = ` 
                <div class="infoPost">
                    <div class="imgPost">
                        <img src="../assets/lucas-gouvea-aoEwuEH7YAs-unsplash.jpg" alt="">
                    </div>
            
                    <h1>Mikael Lucas</h1>
                    <p>${time}</p>
        
                </div>
                    <p>
                        ${this.textarea.value}
                    </p>
                        <div class="actionButton">
                            <button type="button" class="filePostheart"><img src="../icons/12138redheart_110427.png" alt="Curtir">Curtir</button>
                            <button type="button" class="filePost"><img src="../icons/commentlinear_106230.png" alt="Comentar">Comentar</button>
                        </div>
                `;

                this.divPost.append(newPost);
                this.textarea.value= "";
            }else{
                alert('Digite acima de 2 caracteres!')
            }
                }   
            this.onSubmit(handleSubmit)
        }

}

const postForm = new FormPost('publiPost', 'textarea', 'postFeed')