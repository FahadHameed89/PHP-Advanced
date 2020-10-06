// alert ("hi");

// Get the react root element defined in HTML
const reactRoot = document.getElementById( 'react-root' );

// Search Form Component
const SearchForm = props => {
    return (
        <div>
        <h2>Snack Search Form</h2>
        <form>
            <label htmlFor="search">
                Enter a Search Term:
                <input
                    type="search"
                    id="search"
                />
            </label>
            <input 
                type="submit"
                value="Search Snacks" 
            />
        </form>
        <h3>Snack Search Results</h3>
        <ul></ul>
        </div>
    );
}

ReactDOM.render ( <SearchForm />, reactRoot );