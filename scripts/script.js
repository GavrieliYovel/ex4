window.onload = () => {
    validateCheckBoxes() 
}


function validateCheckBoxes() {
    document.getElementById("submit_button").onclick = () => {
        let counter = 0;
        boxes = document.getElementById("checkBoxes").children;
        boxesNumber = boxes.length;
        let check1 = boxes[0].children;
        for(let i = 0; i < boxesNumber; i++)
        {   
            let check = boxes[i].children;
            if(check[0].checked)
            counter++;
        }
        if(counter >= 2)
        {
            check1[0].setCustomValidity("");
        }
        else
        {
            check1[0].setCustomValidity("At least two checkboxes needed");
        }

    }
}