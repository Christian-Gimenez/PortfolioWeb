import { BanMenu } from "./BanMenu.jsx"
import { ItemMenu } from "./ItemMenu.jsx"

export function StartMenu() {
  return(
    <section className="startMenu">
      <BanMenu />
      <ItemMenu>About me</ItemMenu>
      <ItemMenu>Experience</ItemMenu>
      <ItemMenu>Knowledge</ItemMenu>
      <ItemMenu>Contact</ItemMenu>
    </section>
  ) 
}