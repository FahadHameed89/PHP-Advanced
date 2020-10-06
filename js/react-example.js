// alert ("hi");

// Get the react root element defined in HTML
const reactRoot = document.getElementById( 'react-root' );

// Search Form Component

const SearchForm = props => {
    // UseState + OnChange can keep track of a changing state (In our case, the search bar)

    const [search, setSearch] = React.useState( '' );

    // Handle search submit. 
    const submitSearch = event => {
        // Prevents the form from submitting the old way
        event.preventDefault();
       // console.log( 'Form Submitted!' );
       fetch( `http://localhost:3000/api/snacks.php?search=${search}` )
        .then (response => response.json() )
        .then ( results => {
            console.log( results );
        } )
    }

    // Renders the component
    return (
        <React.Fragment>
        <h2>Snack Search Form</h2>
        <form onSubmit={submitSearch}>
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