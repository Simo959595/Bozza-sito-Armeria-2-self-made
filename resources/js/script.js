fetch("./products.json").then( (response)=> response.json() ).then( (data)=> {

    // console.log(data)

    let productsList = document.querySelector("#productsList")

    function createCards(array) {
        productsList.innerHTML = ""
        array.forEach( (el, i)=> {
            let div = document.createElement("div")
            div.classList.add("col-12", "col-lg-3", "col-md-4", "my-3")
            div.innerHTML = `
                         <div class="card">
                            <img src=${el.img} class="card-img-top" alt="...">
                            <div class="card-body text-center">
                              <h5 class="card-title fw-bold">${el.name}</h5>
                              <p class="card-text">Categoria: ${el.categoria}</p>
                              <p class="card-text">Prezzo: ${el.prezzo}$</p>
                              <a href="#" class="btn-custom" data-bs-toggle="modal" data-bs-target="#${el.name.replace(/ /g, "-")}">Apri Scheda</a>
                            </div>
                          </div>
            `
            productsList.appendChild(div)
        })

    

    }

    

















})