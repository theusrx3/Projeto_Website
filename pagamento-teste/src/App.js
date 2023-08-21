import React, {useState, useEffect, useRef} from 'react'



function App() {

  const [paid, setPaid] = useState(false)
  const [loaded, setLoaded] = useState(false)

  var paypalRef = useRef()

  const product = {
    price: 100.00,
    description: "Plano básico",
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
                    description: product.description,
                    amount: {
                      currency_code: "BRL",
                      value: product.price
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
    <div className="App">
      {paid ? (
        <div>
          <h1>Parabéns você comprou o plano!</h1>
        </div>
      ) : (
        <>
        <h1>{product.description} por R${product.price}</h1>
        <div ref={v => (paypalRef = v)}/>
        </>
      )}
    </div>
    </>
  );
}

export default App;