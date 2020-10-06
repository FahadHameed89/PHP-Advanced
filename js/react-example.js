// alert ("hi");

// Get the react root element defined in HTML
const reactRoot = document.getElementById( 'react-root' );

// Search Form Component

const SearchForm = props => {
    // UseState + OnChange can keep track of a changing state (In our case, the search bar)

    const [search, setSearch] = React.useState( '' );
    // Snacks / Search result array state.
    const [snacks, setSnacks] = React.useState( [] );


    // Handle search submit. 
    const submitSearch = event => {
        // Prevents the form from submitting the old way
        event.preventDefault();
       // console.log( 'Form Submitted!' );
       fetch( `http://localhost:3000/api/snacks.php?search=${search}` )
        .then (response => response.json() )
        .then ( results => {
            // console.log( results );
            // Update snacks array (state ) with new results from array.
            setSnacks( results );
        } )
        .catch ( error => { throw error } );
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
        <ul>
            {snacks.map( ( snack, index ) => (
                <li key={index}>
                    <h4>{snack[0]}</h4>
                    <dl>
                        <dt>Snack Type:</dt>
                        <dd>{snack[1]}</dd>
                        <dt>Snack Price:</dt>
                        <dd>${parseFloat(snack[2] ).toFixed( 2 ) }  </dd>
                        <dt>Snack Calories:</dt>
                        <dd>{snack[3]}</dd>
                    </dl>
                </li>
            ))}
        </ul>
        </React.Fragment>
    );
}

ReactDOM.render ( <SearchForm />, reactRoot );