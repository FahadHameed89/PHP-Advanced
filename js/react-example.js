// alert ("hi");

// Get the react root element defined in HTML
const reactRoot = document.getElementById( 'react-root' );

// Search Form Component

const SearchForm = props => {
    // UseState + OnChange can keep track of a changing state (In our case, the search bar)

    const [search, setSearch] = React.useState( '' );

    // Renders the component
    return (
        <React.Fragment>
        <h2>Snack Search Form</h2>
        <form>
            <label htmlFor="search">
                Enter a Search Term:
                <input
                    type="search"
                    id="search"
                    onChange={event => { setSearch( event.target.value ) } }
                    value={ search }
                />
            </label> 
            <input 
                type="submit"
                value="Search Snacks" 
            />
        </form>
        <h3>Snack Search Results</h3>
        <ul></ul>
        </React.Fragment>
    );
}

ReactDOM.render ( <SearchForm />, reactRoot );