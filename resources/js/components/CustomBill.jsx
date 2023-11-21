// CustomBill.jsx
import React from 'react';

export function CustomBill({ cart }) {
  return (
    <html>
      <head>
        <title>Custom Bill</title>
      </head>
      <body>
        <h1>Custom Bill</h1>
        <table className="table table-striped">
          <thead>
            <tr>
              <th>Product Name</th>
              <th>Quantity</th>
              <th className="text-right">Price</th>
            </tr>
          </thead>
          <tbody>
            {cart.map((c) => (
              <tr key={c.id}>
                <td>{c.name}</td>
                <td>
                  <input
                    type="text"
                    className="form-control form-control-sm qty"
                    value={c.pivot.quantity}
                  />
                </td>
                <td className="text-right">
                  {window.APP.currency_symbol}{' '}
                  {(c.price * c.pivot.quantity).toFixed(2)}
                </td>
              </tr>
            ))}
          </tbody>
        </table>
      </body>
    </html>
  );
}
