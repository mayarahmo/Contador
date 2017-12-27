var textareaText = document.getElementById('text');

textareaText.onkeyup = function(){

    if (this.value != ""){

        words = this.value.split(/\s/g); //all spaces types, each block is separated by space
        characters = this.value.split(/\S/g); //everything is not a space
        paragraphs = this.value.split(/\n/g); // all paragraphs
        sentences = this.value.split("."); // all sentences

        // remove espaços em branco do array
        words = words.filter(function(str) {
            return /\S/.test(str);
        });

        // remove espaços em branco do array
        sentences = sentences.filter(function(str) {
            return /\S/.test(str);
        });

        wordCounts = document.getElementsByClassName('word-count');
        characterCounts = document.getElementsByClassName('character-count');
        paragraphCounts = document.getElementsByClassName('paragraph-count');
        sentenceCounts = document.getElementsByClassName('sentence-count');

        for(i=0;i<wordCounts.length;i++){
            wordCounts[i].textContent = words.length;
        }

        for(i=0;i<characterCounts.length;i++){
            characterCounts[i].textContent = characters.length -1;
        }

        for(i=0;i<paragraphCounts.length;i++){
            paragraphCounts[i].textContent = paragraphs.length;
        }

        for(i=0;i<sentenceCounts.length;i++){
            sentenceCounts[i].textContent = sentences.length;
        }
    }else{
        for(i=0;i<wordCounts.length;i++){
            wordCounts[i].textContent = 0;
        }

        for(i=0;i<characterCounts.length;i++){
            characterCounts[i].textContent = 0;
        }

        for(i=0;i<paragraphCounts.length;i++){
            paragraphCounts[i].textContent = 0;
        }

        for(i=0;i<sentenceCounts.length;i++){
            sentenceCounts[i].textContent = 0;
        }
    }

}

function revert(){
    var content =  textareaText.value.split("").reverse().join("");
    textareaText.value = content;
}

function countOcurrences(word){
    words = textareaText.value.split(/\s/g); //all spaces types, each block is separated by space
    var count = 0;
    for(i=0;i<words.length;i++){
        if(words[i] == word) count++;
    }
    if(document.getElementById("word").value != "") document.getElementById("word-ocurrences").innerHTML = count;
}

function slicefunc(element){
    alert("oi");
    //alert(document.getElementById(element));
    //alert(element.innerText);
    //element.textContent = ('0' + element.innerText).slice(-2);
}