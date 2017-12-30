var textareaText = document.getElementById('text');

textareaText.onkeyup = function(){

    if (this.value != ""){

        words = this.value.split(/\s/g); //all spaces types, each block is separated by space
        characters = this.value.split(/\S/g); //everything is not a space
        lines = this.value.split(/\n/g); // all lines
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
        lineCounts = document.getElementsByClassName('line-count');

        for(i=0;i<wordCounts.length;i++){
            wordCounts[i].textContent = ('0' + words.length).slice(-2);
        }

        for(i=0;i<characterCounts.length;i++){
            characterCounts[i].textContent = ('0' + (characters.length -1)).slice(-2);
        }

        var paragraphs = 0;
        for(i=0;i<lines.length;i++){
            if(lines[i] != "") {
                paragraphs++;
            }
        }
        for(i=0;i<paragraphCounts.length;i++){
            paragraphCounts[i].textContent = ('0' + paragraphs).slice(-2);
        }

        for(i=0;i<sentenceCounts.length;i++){
            sentenceCounts[i].textContent = ('0' + sentences.length).slice(-2);
        }

        for(i=0;i<lineCounts.length;i++){
            lineCounts[i].textContent = ('0' + lines.length).slice(-2);
        }
    }else{
        for(i=0;i<wordCounts.length;i++){
            wordCounts[i].textContent = '00';
        }

        for(i=0;i<characterCounts.length;i++){
            characterCounts[i].textContent = '00';
        }

        for(i=0;i<paragraphCounts.length;i++){
            paragraphCounts[i].textContent = '00';
        }

        for(i=0;i<lineCounts.length;i++){
            lineCounts[i].textContent = '00';
        }

        for(i=0;i<sentenceCounts.length;i++){
            sentenceCounts[i].textContent = '00';
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
    if(document.getElementById("word").value != "") document.getElementById("word-ocurrences").innerHTML = ('0' + count).slice(-2);
}

function slicefunc(element){
    // alert("oi");
    //alert(document.getElementById(element));
    //alert(element.innerText);
    //element.textContent = ('0' + element.innerText).slice(-2);
}