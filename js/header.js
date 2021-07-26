// const contactItem = () => {
//     const menuItems = document.querySelectorAll("#site-navigation li")
//     for (i = 0; i < menuItems.length; i++) {
//         if ("Contact" == menuItems[i].innerText) {
//             return menuItems[i]
//         }
//     }
// }

const contactDrop = () => {
    const contactPanel = document.querySelector(".search-drop-down")
    // const contact = contactItem()
    const search = document.querySelector("a#icon-search")
    // const newArray = [contact, search]
    const tl = new TimelineMax({ paused: true })
    tl.to(contactPanel, 0.5, { y: 0 })

    // search.forEach(function (elem) {
    search.addEventListener("click", (e) => {
        if (!contactPanel.classList.contains("toggled")) {
            tl.play(0)
            contactPanel.classList.add("toggled")
            e.preventDefault()
        } else {
            tl.reverse(0)
            contactPanel.classList.remove("toggled")
            e.preventDefault()
        }
    })
    // })

    document.onkeydown = function (evt) {
        evt = evt || window.event
        var isEscape = false
        if ("key" in evt) {
            isEscape = evt.key == "Escape" || evt.key == "Esc"
        } else {
            isEscape = evt.keyCode == 27
        }
        if (isEscape && contactPanel.classList.contains("toggled")) {
            tl.reverse(0)
            contactPanel.classList.remove("toggled")
        }
    }
}
// contactDrop()

const fetchInstaData = () => {
    const accessToken = fsCommonData.igUserDetails.access_token
    console.log(accessToken)
    fetch(
        "https://graph.instagram.com/me/media?fields=id,media_type,media_url,username,caption&access_token=" +
            accessToken
    )
        .then((response) => response.json())
        .then((data) => {
            placeImages(data)
        })
}
fetchInstaData()

const placeImages = (data) => {
    const numberInRow = fsCommonData.numberInRow
    const root = document.querySelector(".insta-root")

    data.data.slice(0, numberInRow).map((image) => {
        console.log(image.media_url)
        let imgContainer = document.createElement("div")
        let img = document.createElement("img")
        img.src = image.media_url
        imgContainer.appendChild(img)
        root.appendChild(imgContainer)
    })
}


const grabP = () => {
	const contentBlock = document.querySelector(".entry-content")
	const contentChildrens = Array.from(contentBlock.childNodes)
	let num = 1

	for (i = 0; i < contentChildrens.length; i++){
		
		if ( "P" !== contentChildrens[i].nodeName ){
		} else{
			console.log(contentChildrens[i])
			// const div = document.createElement("DIV")
			// div.appendChild.contentChildrens[i]
			// contentBlock.appendChild.div


		}
	}
}
grabP()