import React, {useState, useEffect, useRef} from 'react'



function App() {

  const [paid, setPaid] = useState(false)
  const [loaded, setLoaded] = useState(false)

  var paypalRef = useRef()

 const productBasic = {
    price: 100.00,
    description: "Plano básico"
  }
  const productInter = {
    price: 150.00,
    description: "Plano intermediário"
  }

  const productPremium = {
    price: 180.00,
    description: "Plano premium"
  }

  useEffect(() => {
    const script = document.createElement("script")
    const id = "AYFafkM9dEqqgNTBaSFwLn5q6K1b4KW71SIJJQyfKY47zINMOpqtVGOgbKF67_aDgqRXEj7KUxOdNd_X"
    script.src =`https://www.paypal.com/sdk/js?currency=BRL&client-id=${id}`

    script.addEventListener("load", () => setLoaded(true))

    document.body.appendChild(script)

    if(loaded){
      function loadButtonsAndLogicAboutPayment(){
        setTimeout(() => {
          window.paypal
          .Buttons({
            createOrder: (data, actions) => {
              return actions.order.create({
                purchase_units: [
                  {
                    description: productPremium.description,
                    amount: {
                      currency_code: "BRL",
                      value: productPremium.price
                    }
                  }
                ]
              })
            },
            onApprove: async (_,actions) => {
              const order = await actions.order.capture()

              setPaid(true)

              console.log(order)
            }
          })
          .render(paypalRef)
        })
      }
      loadButtonsAndLogicAboutPayment()
    }
  })

  return (
    <>
    <div className="App" 
    style={{border: 2 + 'px solid', margin: 0 + ' auto', position: 'relative', width: 500+ 'px', bottom: -300 + 'px', backgroundColor: '#1f1f1f', padding: 30 + 'px',
    borderRadius: 30 + 'px', fontFamily: 'Arial, Helvetica, sans-serif', color: 'white'
    
    
    
    }}>
      {paid ? (
        <div>
          <h1>Parabéns você comprou o plano!</h1>
        </div>
      ) : (
        <>
        <h1>{productPremium.description} por R${productPremium.price}</h1>
        <div ref={v => (paypalRef = v)}/>
        </>
      )}
    </div>
    </>
  );
}


export default App;