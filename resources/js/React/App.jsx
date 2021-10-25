import axios from "axios";
import React, { useState } from "react";
import ReactDOM from "react-dom";

export default function App() {
  const [url, setUrl] = useState(false);
  const [shortUrl, setShortUrl] = useState(false);
  const [errors, setErrors] = useState(false);

  const fetchUrl = (url, e) => {
    e.preventDefault();
    setErrors(false);
    axios
      .post("/short/insert", { urltoshort: url })
      .then((res) => setShortUrl(`http://www.tuqurl.xyz/${res.data.url}`))
      .catch((err) => setErrors("Url Inválida"));
  };

  return (
    <div>
      <nav className="navbar navbar-dark bg-dark">
        <div className="container-fluid">
          <div className="navbar-brand">
            <p>TUQ! URL</p>
          </div>
        </div>
      </nav>
      <div className="container">
        <div className="row justify-content-center">
          <div
            className="col-10 my-5 shortener__container bg-dark"
            align="center"
          >
            <h1
              style={{
                margin: "73px 0 73px 0",
              }}
            >
              {" "}
              Transform Url Quick!{" "}
            </h1>
            {errors && (
              <div
                style={{
                  backgroundColor: "#F1AAAA",
                  padding: "12px",
                  borderRadius: "6px",
                }}
              >
                Invalid URL, be sure to use a real URL.
              </div>
            )}
            <h2
              style={{
                margin: "73px 0 73px 0",
              }}
            >
              The simplest and fastest URL shortener you'll ever need!
            </h2>
            <form
              className="form-inline shortener__form"
              onSubmit={(e) => {
                fetchUrl(url, e);
              }}
            >
              {shortUrl && (
                <>
                  <h3
                    style={{
                      padding: "73px 0 73px 0",
                    }}
                    class="short__url"
                  >
                    URL encurtada: <a href={shortUrl}>{shortUrl}</a>
                  </h3>
                  <button
                    onClick={() => {
                      setShortUrl(false);
                    }}
                    className="btn btn-outline-secondary mx-2"
                  >
                    {" "}
                    Encurtar novamente!{" "}
                  </button>
                </>
              )}
              {!shortUrl && (
                <>
                  <div className="input-group mb-3 shortener__input">
                    <input
                      type="text"
                      className="form-control"
                      placeholder="URL"
                      aria-label="URL que você quer encurtar"
                      aria-describedby="basic-addon2"
                      name="urltoshort"
                      onChange={(e) => {
                        setUrl(e.target.value);
                      }}
                    />
                    <div className="input-group-append">
                      <button
                        className="btn btn-secondary"
                        style={{
                          fontSize: "20px",
                          fontWeight: "700",
                        }}
                        type="submit"
                      >
                        Encurta!
                      </button>
                    </div>
                  </div>
                </>
              )}
            </form>
          </div>
        </div>
      </div>
    </div>
  );
}

if (document.getElementById("app")) {
  ReactDOM.render(<App />, document.getElementById("app"));
}
