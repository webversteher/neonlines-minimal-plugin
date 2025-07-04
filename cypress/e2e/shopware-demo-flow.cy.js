describe('Dockware Demo - E2E Shopping Flow', () => {
    it('Besucht Startseite und öffnet ein Produkt', () => {
        cy.visit('/');

        // Damen Sneaker sollte vorhanden sein (Demo-Daten)
        cy.contains('Damen Sneaker').click();

        // Produktseite
        cy.get('.product-detail-name').should('contain', 'Damen Sneaker');
    });

    it('Legt Produkt in den Warenkorb und geht zur Kasse', () => {
        // In den Warenkorb legen
        cy.get('button.product-detail-buy-button').click();

        // Offcanvas sichtbar
        cy.get('.offcanvas').should('be.visible');
        cy.contains('Warenkorb').should('exist');
        cy.contains('Damen Sneaker').should('exist');

        // Zum Warenkorb
        cy.get('a[href="/checkout/cart"]').click();

        cy.url().should('include', '/checkout/cart');
        cy.contains('Damen Sneaker').should('exist');

        // Weiter zur Kasse (leitet auf Login/Guest Page)
        cy.get('a[href="/checkout/confirm"]').click();
        cy.url().should('include', '/checkout');
    });
});
