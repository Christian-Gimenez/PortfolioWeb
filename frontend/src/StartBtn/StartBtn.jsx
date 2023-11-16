import "./StartBtn.css"

export function StartBtn({ iconURL, insdeText, altImg }) {
  return (
    <button className="startBtn" id="StartBtn">
      <div>
        <img src={iconURL} alt={altImg}/>
         {/*./win95-icons/png/MOD-windows-0.png*/}
        {insdeText}
      </div>
    </button>
  )
}